<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\siswa;

class SiswaController extends Controller
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
        $a = siswa::all();
        return view ('siswa.index',['siswa' => $a]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('siswa.create');
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
            'nama_siswa' => 'required',
            'alamat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $siswa = new siswa();
        $siswa->nis = $request->nis;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat_lahir = $request->alamat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->save();
        return redirect()->route('siswa.index')->with('succes','Data berhasil dibuat!');
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
        $siswa = siswa::FindOrFail($id);
        return view('siswa.show',compact('siswa'));
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
        $siswa = siswa::FindOrFail($id);
        return view('siswa.edit',compact('siswa'));
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
            'nama_siswa' => 'required',
            'alamat_lahir' => 'required',
            'tanggal_lahir' => 'required',
        ]);

        $siswa = siswa::FindOrFail($id);
        $siswa->nis = $request->nis;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->alamat_lahir = $request->alamat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->save();
        return redirect()->route('siswa.index')->with('succes','Data berhasil diedit!');
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
        $siswa = siswa::FindOrFail($id);
        $siswa->delete();
        return redirect()->route('siswa.index')->with('succes','Data berhasil dihapus!');
    }
}
