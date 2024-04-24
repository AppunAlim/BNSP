<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Daftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HasilController extends Controller
{
public function index($id)
{
    // Fetch the Daftar entry by id along with its associated Beasiswa entry
    $daftar = Daftar::with('beasiswa')->find($id);

    // Check if the daftar entry exists
    if (!$daftar) {
        // If not found, you may want to handle this case, for example, by redirecting or showing an error message
        return redirect()->route('hasilLot')->with('error', 'Daftar entry not found');
    }

    return view('hasil', compact('daftar'));
}


public function show(Request $request){
    $beasiswa = Beasiswa::all();
    $daftar = Daftar::paginate(10);

    if ($daftar) {
        return view('pendaftar')->with(compact('beasiswa', 'daftar'));
    } else {
        echo 'data tidak masuk';
        dd($beasiswa, $daftar);
    }
}



}
