@extends('layout.main')
@section('content')
<div class="d-flex">
    <div class="ms-auto">
        <a href="{{ route('tambah.mhs')}}" class="btn btn-sm btn-primary ms-auto">Tambah</a>
    </div>
</div>
    <table class="table text-center">
        <tr>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis_Kelamin</th>
            <th>Aksi</th>
        </tr>
        @foreach ($mhs as $no=>$data)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nim }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->jenis_kelamin }}</td>
            <td>
                <a href="{{ route('edit.mhs',$data->id)}}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('delete.mhs',$data->id)}}" method="post">
                    @csrf
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>   
        @endforeach
    </table>
@endsection