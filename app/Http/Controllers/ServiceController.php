<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public function index()
    {
        $location = file_get_contents('../public/json/services.json');

        $services_json = json_decode($location, true);

        $services = $services_json['services'];

        return view('service.index', compact('services'));
    }
}
