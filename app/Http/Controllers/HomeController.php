<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacation;

class HomeController extends Controller
{
    public function index(){
        $vacations = Vacation::all();

        $data = [
            'vacations' => $vacations
        ];

        return view('home', $data);
    }
}
