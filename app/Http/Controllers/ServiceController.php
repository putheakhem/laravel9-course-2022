<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __invoke()
    {
        $services = Service::all();
        return view('service', [
            'services' => $services,
        ]);
    }


    public function create() {
        return view('services.create');
    }
}
