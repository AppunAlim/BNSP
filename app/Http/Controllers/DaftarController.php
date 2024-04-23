<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    public function index()
    {
       $beasiswa = Beasiswa::all();
       $daftar = Daftar::all();
       $ipk_random = rand(20, 40) / 10;


        return view('daftar', compact('beasiswa', 'daftar', 'ipk_random'));
    }

    public function create(Request $request)

    {

        try {


            // Create a new instance of your model and populate it with the validated data
            $record = new Daftar();

        // Populate the model with the validated data
        $record->nama = $request->nama;
        $record->email = $request->email;
        $record->no_hp = $request->no_hp;
        $record->semester = $request->semester;
        $record->ipk = $request->ipk_random;
        $record->pilihan_beasiswa = $request->pilihan_beasiswa;
        $record->status_pengajuan = 'Belum Diverifikasi';

        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $record->upload = 'uploads/' . $filename;
        } else {
            $record->upload = 'Tidak Masuk Kreteria';
        }

        // Save the record to the database
        $record->save();

            // Redirect the user after successful submission
            return redirect()->route('hasil')->with('message', 'Anda Berhasil Mendaftar');

        } catch (\Exception $e) {
            dd($e->getMessage()); // Display the exception message
        }

    }
}
