@extends('layout.default')
@section('content')
    
<form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
    @csrf
  <div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 sm:max-w-xl mx-auto text-center">
        <span class="text-2xl font-light">Tambah Data Mahasiswa</span>
        <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
          <div class="h-2 bg-indigo-400 rounded-t-md"></div>
          <div class="py-6 px-8">
            <label class="block font-semibold">Nama<label>
            <input type="text" placeholder="Nama" value="{{ $mahasiswa->nama }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="nama">
            <label class="block mt-3 font-semibold">Nim<label>
            <input type="text" placeholder="Nim" value="{{ $mahasiswa->nim }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="nim">
            <label class="block mt-3 font-semibold">No Telp<label>
            <input type="text" placeholder="No Telp" value="{{ $mahasiswa->no_telp }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="no_telp">
            <label class="block mt-3 font-semibold">Umur<label>
            <input type="number" placeholder="Umur" value="{{ $mahasiswa->umur }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="umur">
            <label class="block mt-3 font-semibold">Alamat<label>
            <textarea name="alamat" id="" cols="30" rows="10" placeholder="Alamat" value="" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md">{{ $mahasiswa->alamat }}</textarea>
            <label class="block font-semibold">Tanggal Lahir<label>
            <input type="date" placeholder="Tanggal Lahir" value="{{ $mahasiswa->tanggal_lahir }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="tanggal_lahir">
            <label class="block font-semibold">Jenis Kelamin</label>
            <input type="radio" name="jenis_kelamin" value="L" {{ $mahasiswa->jenis_kelamin == 'L' ? 'checked' : '' }}>Laki-laki
            <input type="radio" name="jenis_kelamin" value="P" {{ $mahasiswa->jenis_kelamin == 'P' ? 'checked' : '' }}>Perempuan
            
            <div class="flex justify-between items-baseline">
              <button class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg" type="submit">Simpan</button>
              <a href="{{ route('mahasiswa.index') }}" class="text-sm hover:underline">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </form>
  



















@endsection