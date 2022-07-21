<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nilai;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        $a = nilai::all();
        return view ('nilai.index',['nilai' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nilai.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'nis' => 'required',
            'kode_mata_pelajaran' => 'required',
            'nilai' => 'required',
            'index_nilai' => 'required',
        ]);

        $nilai = new nilai();
        $nilai->nis = $request->nis;
        $nilai->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $nilai->nilai = $request->nilai;
        $nilai->index_nilai = $request->index_nilai;
        $nilai->save();
        return redirect()->route('nilai.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $nilai = nilai::FindOrFail($id);
        return view('nilai.show',compact('nilai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $nilai = nilai::FindOrFail($id);
        return view('nilai.edit',compact('nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validated = $request->validate([
            'nis' => 'required',
            'kode_mata_pelajaran' => 'required',
            'nilai' => 'required',
            'index_nilai' => 'required',
        ]);

        $nilai = nilai::FindOrFail($id);
        $nilai->nis = $request->nis;
        $nilai->kode_mata_pelajaran = $request->kode_mata_pelajaran;
        $nilai->nilai = $request->nilai;
        $nilai->index_nilai = $request->index_nilai;
        $nilai->save();
        return redirect()->route('nilai.index')->with('succes','Data berhasil dibuat!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $nilai = nilai::FindOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index')->with('succes','Data berhasil dihapus!');
    }
}
