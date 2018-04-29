<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index() {

        $location = file_get_contents('../public/json/testimonials.json');

        $testimonials_json = json_decode($location, true);

        $testimonials = $testimonials_json['testimonials'];

        return view('home.index', compact('testimonials'));
    }
}
