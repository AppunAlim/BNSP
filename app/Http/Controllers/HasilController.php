<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HasilController extends Controller{
    public function index(Request $request)
{
    // Assuming you're passing data from the redirect in the session
    $beasiswa = Beasiswa::all();
    $daftar = Daftar::all();

    // Ensure $daftar is not null before passing it to the view
    if ($daftar) {
        // Data is present, so pass it to the view
        return view('hasil', compact('beasiswa', 'daftar'));
    } else {
        echo 'data tidak masuk';
        dd($beasiswa, $daftar);
        // For example, redirect the user back to the previous page or show an error message
    }
}


}
