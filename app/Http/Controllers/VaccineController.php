<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccineController extends Controller
{
    function create()
    {
        return view('center_admin.vaccine.create');
    }
}
