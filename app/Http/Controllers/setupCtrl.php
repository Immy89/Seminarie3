<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class setupCtrl extends Controller
{
    public function index()
    {
        return view('Welcome');
    }

    public function LoggaIn_Registrera()
    {
        return view('LoggaIn_Registrera');
    }

    public function SidanUnderUppbyggnad()
    {
        return view('SidanUnderUppbyggnad');
    }
}
