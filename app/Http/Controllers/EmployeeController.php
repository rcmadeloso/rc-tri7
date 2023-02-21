<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmployee;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;
use Redirect;
use App\Http\Resources\{EmployeeResource,EmployeeCollection};
use App\Services\RoleRestrictionService;
use App\Enums\EmployeePosition;

class EmployeeController extends Controller
{
    protected $roleRestriction;

    public function __construct()
    {
        $this->roleRestriction = new RoleRestrictionService();
    }

    public function index()
    {
        $employees = new EmployeeCollection(new EmployeeResource(Employee::all()));

        return Inertia::render('Employee/Index',[
            'employees' => $employees
        ]);
    }

    public function create()
    {
        return Inertia::render('Employee/Create',[
            'user' => auth()->user(),
            'default_position' => auth()->user()->role,
            'positions' => EmployeePosition::AllowableValues(),
        ]);
    }

    public function store(StoreEmployee $request)
    {
        $user = auth()->user();
        if(!$this->roleRestriction->canMakeAction($user->role,$request->position)) abort(403);


        try {
            \DB::beginTransaction();

            $user = Employee::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'position' => $request->position,
            ]);

            \DB::commit();

            return back()->withMessage('Successfully Created');

        } catch (\Exception $exception) {

            \DB::rollBack();

            $errorCode = now()->timestamp.'-'.auth()->user()->id;

            info($errorCode.' => '.$exception);

            return Redirect::back()->withErrors(['App Error' => 'Oops, something went wrong! Error Code:'.$errorCode]);
        }


    }

    public function edit(Employee $employee)
    {
        $user = auth()->user();

        if(!$this->roleRestriction->canMakeAction($user->role,$employee->position)) abort(403);

        return Inertia::render('Employee/Edit',[
            'employee' => $employee,
            'user' => auth()->user(),
            'default_position' => auth()->user()->role,
            'positions' => EmployeePosition::AllowableValues(),
        ]);
    }

    public function update(StoreEmployee $request, Employee $employee)
    {
        $user = auth()->user();

        if(!$this->roleRestriction->canMakeAction($user->role,$employee->position)) abort(403);
        
        try {
            \DB::beginTransaction();

            $employee->fill($request->post());

            if (! $employee->isDirty()) {
                return back()->withMessage('No changes made to employee: "'.$employee->name.'"');
            }

            $employee->save();

            \DB::commit();

            return back()->withMessage('Successfully Updated');

        } catch (\Exception $exception) {
            \DB::rollBack();

            $errorCode = now()->timestamp.'-'.auth()->user()->id;

            info($errorCode.' => '.$exception);

            return Redirect::back()->withErrors(['App Error' => 'Oops, something went wrong! Error Code:'.$errorCode]);
        }
    }


    public function destroy(Employee $employee)
    {
        $user = auth()->user();
        
        if(!$this->roleRestriction->canMakeAction($user->role,$employee->position)) abort(403);
        
        $employee->delete();
        return redirect()->route('employees.index');
    }

}
