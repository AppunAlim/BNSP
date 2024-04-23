<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Daftar;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
       $beasiswa = Beasiswa::all();
       $daftar = Daftar::all();


        return view('welcome', compact('beasiswa', 'daftar'));
    }

    public function create(Request $request)

    {
        $beasiswa = Beasiswa::all();
        $daftar = Daftar::all();

        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'no_hp' => 'required|string|max:12', // Corrected validation rule
                'semester' => 'required|integer',
                'ipk' => 'required',
                'pilihan_beasiswa' => 'required|string',
                // 'status_pengajuan' => 'required|string|max:255',
                'upload' => 'required|file', // Example validation for file upload (PDF format, max 2MB)
            ]);


            // Create a new instance of your model and populate it with the validated data
            $record = new Daftar();

        // Populate the model with the validated data
        $record->nama = $request->nama;
        $record->email = $request->email;
        $record->no_hp = $request->no_hp;
        $record->semester = $request->semester;
        $record->ipk = $request->ipk;
        $record->pilihan_beasiswa = $request->pilihan_beasiswa;
        $record->status_pengajuan = $request->status_pengajuan;

        // Handle file upload if needed
        if ($request->hasFile('upload')) {
            $file = $request->file('upload');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads'), $filename);
            $record->upload = 'uploads/' . $filename;
        }

        // Save the record to the database
        $record->save();

            // Redirect the user after successful submission
            return redirect()->route('hasil');

        } catch (\Exception $e) {
            dd($e->getMessage()); // Display the exception message
        }

    }
}
