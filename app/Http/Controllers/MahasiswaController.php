<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class MahasiswaController extends Controller
{
    public function index() //untuk menampilkan data mahasiswa ke view
    {
        return view('mahasiswa.index', [
            'mahasiswa' => Mahasiswa::all()
        ]);
    } 

    public function create()
    {
        return view('mahasiswa.form');
    }

    public function store(Request $request) //untuk membuat data mahasiswa baru
    {
        $request->validate([
            "nama" => ['required'],
            "nim" => ['required'],
            "no_telp" => ['required'],
            "umur" => ['required', 'min:'],
            "alamat" => ['required'],
            "tanggal_lahir" => ['required'],
            "jenis_kelamin" => ['required']
        ]);

        Mahasiswa::create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'no_telp' => $request->input('no_telp'),
            'umur' => $request->input('umur'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
        ]);


       return redirect()->route('mahasiswa.index')->withSuccess('Data 
       Mahasiswa berhasil di tambahkan');
    }

    public function delete(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->back()->withSuccess('Data berhasil Dihapus');
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa )
    {

        $request->validate([
            "nama" => ['required'],
            "nim" => ['required'],
            "no_telp" => ['required'],
            "umur" => ['required'],
            "alamat" => ['required'],
            "tanggal_lahir" => ['required'],
            "jenis_kelamin" => ['required']
        ]);

        $mahasiswa->update([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'no_telp' => $request->input('no_telp'),
            'umur' => $request->input('umur'),
            'alamat' => $request->input('alamat'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
        ]);

        return redirect()->route('mahasiswa.index')->withSuccess('Data 
       Mahasiswa berhasil di tambahkan');
    }
}
