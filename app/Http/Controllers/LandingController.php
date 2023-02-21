<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Redirect;

class LandingController extends Controller
{

    public function index()
    {

        $json_url = 'https://super7tech.com/web_developer_exam_sr/json/slideshow.json';
        $json_string = file_get_contents($json_url);
        $data = json_decode($json_string, true);

        // dd($data);

        return Inertia::render('LandingPage/Index',[
            'slides_data' => $data,
        ]);
    }

}
