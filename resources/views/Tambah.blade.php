@extends('layout.main')
@section('content')
    <form action="{{ route('submit.mhs')}}" method="POST">
        @csrf
        <label>NIM</label>
        <input type="number" name="nim" class="form-control mb-2">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control mb-2">
        <label>Jenis_Kelamin</label>
        <input type="text" name="jenis_kelamin" class="form-control mb-2">        
        <button class="btn btn-primary">Tambah</button>
    </form>
@endsection