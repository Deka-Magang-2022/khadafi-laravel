@extends('layout.default')
@section('content')
    
<form action="{{ route('universitas.update', $universitas->id) }}" method="POST">
    @csrf
  <div class="min-h-screen bg-gray-100 text-gray-800 antialiased px-4 py-6 flex flex-col justify-center sm:py-12">
      <div class="relative py-3 sm:max-w-xl mx-auto text-center">
        <span class="text-2xl font-light">Tambah Data Universitas</span>
        <div class="relative mt-4 bg-white shadow-md sm:rounded-lg text-left">
          <div class="h-2 bg-indigo-400 rounded-t-md"></div>
          <div class="py-6 px-8">
            <label class="block font-semibold">Nama Universitas<label>
            <input type="text" placeholder="Nama Universitas" value="{{ $universitas->nama }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="nama">
            <label class="block mt-3 font-semibold">Alamat Universitas<label>
            <textarea  id="" cols="30" rows="10" placeholder="Alamat" value="" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="alamat">{{ $universitas->alamat }}</textarea>
            <label class="block mt-3 font-semibold">No Telp<label>
            <input type="text" placeholder="No Telp" value="{{ $universitas->no_telp }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="no_telp">
            <label class="block mt-3 font-semibold">Email<label>
            <input type="text" placeholder="Email" value="{{ $universitas->email }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="email">
            <label class="block mt-3 font-semibold">Akreditas<label>
            <input type="text" placeholder="Akreditas" value="{{ $universitas->akreditas }}" class=" border w-full h-5 px-3 py-5 mt-2 hover:outline-none focus:outline-none focus:ring-1 focus:ring-indigo-600 rounded-md" name="akreditas">

            
            <div class="flex justify-between items-baseline">
              <button class="mt-4 bg-indigo-500 text-white py-2 px-6 rounded-lg" type="submit">Simpan</button>
              <a href="{{ route('universitas.index') }}" class="text-sm hover:underline">Kembali</a>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </form>
  








@endsection