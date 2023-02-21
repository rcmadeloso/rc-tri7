<?php

namespace App\Http\Requests;

use App\Enums\{EmployeePosition,UserRole};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreEmployee extends FormRequest
{
    /**
     * The route that users should be redirected to if validation fails.
     *
     * @var string
     */
    // protected $redirectRoute = 'dashboard';

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    // public function authorize()
    // {
    //     if (request()->isMethod('post')) {

    //         return $this->user()->can('create simcards');

    //     } elseif (request()->isMethod('put')) {

    //         return $this->user()->can('update simcards');
    //     }
    // }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */

    public function rules()
    {
        $request = request();
        $allowablePositions = [];

        // Check the user's role and set the allowable positions based on the user's role
        switch (auth()->user()->role) {
            case UserRole::Manager:
                $allowablePositions = [
                    EmployeePosition::Manager, 
                    EmployeePosition::WebDeveloper, 
                    EmployeePosition::WebDesigner
                ];
                break;
            case UserRole::WebDeveloper:
                $allowablePositions = [
                    EmployeePosition::WebDeveloper, 
                ];
                break;
            case UserRole::WebDesigner:
                $allowablePositions = [
                    EmployeePosition::WebDesigner
                ];
                break;
        }

        return [
            'first_name' => [
                'required',
            ],
            'last_name' => [
                'required',
            ],
            'position' => [
                'required',
                Rule::in($allowablePositions),
            ],
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'position.in' => 'You cannot create an employee with this position'
        ];
    }
}
