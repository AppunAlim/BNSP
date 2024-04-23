<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HasilController extends Controller{
    public function index(Request $request)
{
    $beasiswa = Beasiswa::all();
    $daftar = Daftar::paginate(10);

    if ($daftar) {
        return view('hasil')->with(compact('beasiswa', 'daftar'));
    } else {
        echo 'data tidak masuk';
        dd($beasiswa, $daftar);
    }
}


}
