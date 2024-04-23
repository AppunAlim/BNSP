<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Daftar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $beasiswa = Beasiswa::all();
       $daftar = Daftar::all();


        return view('home', compact('beasiswa', 'daftar'));
    }

    public function create(Request $request)
{
    $beasiswa = Beasiswa::all();
    $daftar = Daftar::all();

    try {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'no_hp' => 'required|string|max:20',
            'semester' => 'required|integer',
            'ipk' => 'required|numeric',
            'upload' => 'required|file|mimes:pdf|max:2048', // Example validation for file upload (PDF format, max 2MB)
            'pilihan_beasiswa' => $request->has('pilihan_beasiswa') && !$request->has('pilihan_beasiswa_disabled') ? 'required|integer' : '', // Conditional validation rule
        ]);


        // Create a new instance of your model and populate it with the validated data
        $record = new Beasiswa();
        $record->nama = $request->nama;
        $record->email = $request->email;
        $record->no_hp = $request->no_hp;
        $record->semester = $request->semester;
        $record->ipk = $request->ipk;
        $record->pilihan_beasiswa = $request->pilihan_beasiswa;
        $record->status_pengajuan = null; // Set status_pengajuan to null by default

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
        return redirect()->route('hasil', compact('beasiswa', 'daftar'))->with('success', 'Form submitted successfully!');

    } catch (\Exception $e) {
        dd($e->getMessage()); // Display the exception message
    }
}

}
