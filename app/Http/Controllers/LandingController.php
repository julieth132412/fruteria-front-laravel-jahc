<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function Index(){
        return view ('Landing.index');

    }
    public function Acercade(){
        return view ('Landing.acercade');

    }
    public function Servicios(){
        return view ('Landing.servicios');

    }
    public function Contacto(){
        return view ('Landing.contacto');
    }

}
