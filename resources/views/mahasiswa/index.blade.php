@extends('layout.default')
@section('content')
    

    
    <div class="bg-gray-100 min-h-screen flex justify-center items-center">
        <div class="bg-green-300">
            <button>
                <a href="{{ route ('mahasiswa.create') }}">Tambah Data</a>
            </button>
            <table class="border-2">
                <thead>
                    <tr class="border-2">
                        <th class="border-2" >No</th>
                        <th class="border-2" >Nama</th>
                        <th class="border-2" >Nim</th>
                        <th class="border-2" >No Telp</th>
                        <th class="border-2" >Umur</th>
                        <th class="border-2" >Alamat</th>
                        <th class="border-2" >Tanggal Lahir</th>
                        <th class="border-2" >Jenis Kelamin</th>
                        <th class="border-2" >Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($mahasiswa as $no => $item)
                    <tr class="text-center">
                        <td class="border-2">{{ $no + 1 }}</td>
                        <td class="border-2">{{ $item->nama }}</td>
                        <td class="border-2">{{ $item->nim }}</td>
                        <td class="border-2">{{ $item->no_telp }}</td>
                        <td class="border-2">{{ $item->umur }}</td>
                        <td class="border-2">{{ $item->alamat }}</td>
                        <td class="border-2">{{ $item->tanggal_lahir }}</td>
                        <td class="border-2">{{ $item->jenis_kelamin }}</td>
                        <td class="border-2">
                            
                            <form action="{{ route('mahasiswa.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('mahasiswa.edit', $item->id) }}">Edit</a>
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
        
                    <tr>
                        <td colspan="12">Tidak Ada Data Mahasiswa</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @endsection
    

