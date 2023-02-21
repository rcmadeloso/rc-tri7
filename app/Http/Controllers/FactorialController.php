<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

class FactorialController extends Controller
{

    public function index()
    {

        return Inertia::render('Factorial/Index');
    }


    public function factorial(Request $request)
    {

        $num = $request->num;  
        
        $factorial = 1;  

        for ($x=$num; $x>=1; $x--)   
        {  
          $factorial = $factorial * $x;  
        }

        return $factorial;  

    }


    public function iqtest()
    {
        return Inertia::render('Factorial/IQTest');
    }

}
