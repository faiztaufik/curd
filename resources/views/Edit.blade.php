@extends('layout.main')
@section('content')
    <form action="{{ route('update.mhs',$mhs->id)}}" method="POST">
        @csrf
        <label>NIM</label>
        <input type="number" name="nim" class="form-control mb-2" value="{{$mhs->nim}}">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2" value="{{$mhs->nama}}">
        <label>Jenis_Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control mb-2" value="{{$mhs->jenis_kelamin}}">        
        <button class="btn btn-primary">Simpan</button>
    </form>
@endsection