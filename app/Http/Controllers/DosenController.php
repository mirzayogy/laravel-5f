<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banyak_dosen = Dosen::all();
        // dd($banyak_dosen); // untuk melihat isi
        return view('dosen.index', ['banyak_dosen' => $banyak_dosen]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dosen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data_tervalidasi = $request->validate([
            'nama_dosen' => 'required',
            'nomor_induk_dosen' => 'required',
            'gaji' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        Dosen::create($data_tervalidasi);

        return redirect('/dosen')->with('berhasil','Berhasil tambah data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dosen $dosen)
    {
        return view('dosen.edit',["dosen" => $dosen]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dosen $dosen)
    {
        $request->validate([
            'nama_dosen' => 'required',
            'nomor_induk_dosen' => 'required',
            'gaji' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        // Dosen::create($data_tervalidasi);
        $dosen->update([
            'nama_dosen' => $request->nama_dosen,
            'nomor_induk_dosen' => $request->nomor_induk_dosen,
            'gaji' => $request->gaji,
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect('/dosen')->with('berhasil', 'Berhasil ubah data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dosen $dosen)
    {
        $dosen->delete();
        return redirect('/dosen')->with('berhasil', 'Berhasil hapus data');
    }
}
