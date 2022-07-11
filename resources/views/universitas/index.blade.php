@extends('layout.default')
@section('content')
    

    
    <div class="bg-gray-100 min-h-screen flex justify-center items-center">
        <div class="bg-green-300">
            <button>
                <a href="{{ route ('universitas.create') }}">Tambah Data</a>
            </button>
            <table class="border-2">
                <thead>
                    <tr class="border-2">
                        <th class="border-2" >No</th>
                        <th class="border-2" >Nama</th>
                        <th class="border-2" >Alamat</th>
                        <th class="border-2" >No Telp</th>
                        <th class="border-2" >Email</th>
                        <th class="border-2" >Akreditas</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($universitas as $no => $item)
                    <tr class="text-center">
                        <td class="border-2">{{ $no + 1 }}</td>
                        <td class="border-2">{{ $item->nama }}</td>
                        <td class="border-2">{{ $item->alamat }}</td>
                        <td class="border-2">{{ $item->no_telp }}</td>
                        <td class="border-2">{{ $item->email }}</td>
                        <td class="border-2">{{ $item->akreditas }}</td>
                        <td class="border-2">
                            
                            <form action="{{ route('universitas.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <a href="{{ route('universitas.edit', $item->id) }}">Edit</a>
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
        
                    <tr>
                        <td colspan="12">Tidak Ada Data Universitas</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    @endsection
    

