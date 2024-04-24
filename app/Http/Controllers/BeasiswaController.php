<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function index() {
        return view('beasiswa');
    }

    public function akademik() {
        return view('akademik');
    }

    public function nonAkademik() {
        return view('nonAkademik');
    }
}
