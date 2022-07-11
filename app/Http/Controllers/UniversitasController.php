<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Universitas;
class UniversitasController extends Controller

{
    public function index() 
    {
        return view('universitas.index', [
            'universitas' => Universitas::all()
        ]);
       
    }   

    public function create()
    {
        return view('universitas.form');
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => ['required'],
            "alamat" => ['required'],
            "no_telp" => ['required'],
            "email" => ['required'],
            "akreditas" => ['required']
        ]);
    

    Universitas::create([
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'no_telp' => $request->input('no_telp'),
        'email' => $request->input('email'),
        'akreditas' => $request->input('akreditas')
    ]);

    return redirect()->route('universitas.index')->withSuccess('Data 
    Universitas berhasil di tambahkan');

    }

    public function delete(Universitas $universitas)
    {
        $universitas->delete();
        return redirect()->back()->withSuccess('Data berhasil di hapus');
    }

    public function edit(Universitas $universitas)
    {
        return view('universitas.edit', [
            'universitas' => $universitas
        ]);
    }

    public function update(Request $request, Universitas $universitas)
    {
        $request->validate([
            "nama" => ['required'],
            "alamat" => ['required'],
            "no_telp" => ['required'],
            "email" => ['required'],
            "akreditas" => ['required']
        ]);

        $universitas->update([
        'nama' => $request->input('nama'),
        'alamat' => $request->input('alamat'),
        'no_telp' => $request->input('no_telp'),
        'email' => $request->input('email'),
        'akreditas' => $request->input('akreditas')
        ]);

        return redirect()->route('universitas.index')->withSuccess('Data 
       Universitas berhasil di edit');
    }

}
