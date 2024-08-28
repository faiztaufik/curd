<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MhsController extends Controller
{
    public function index(){
        $mhs = Mahasiswa::get();
        return view('Dashboard',compact('mhs'));
    }

    public function tambah(){
        return view('Tambah');
    }
    public function submit(Request $request){
        $mhs = new Mahasiswa();
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->save();

        return redirect()->route('mhs.tampil');
    }
    public function edit($id){
        $mhs = Mahasiswa::find($id);
        return view('Edit',compact('mhs'));
    }
    public function update(Request $request,$id){
        $mhs = Mahasiswa::find($id);
        $mhs->nim = $request->nim;
        $mhs->nama = $request->nama;
        $mhs->jenis_kelamin = $request->jenis_kelamin;
        $mhs->update();

        return redirect()->route('mhs.tampil');
    }
    public function delete(Request $request,$id){
        $mhs = Mahasiswa::find($id);        
        $mhs->delete();

        return redirect()->route('mhs.tampil');
    }
}
