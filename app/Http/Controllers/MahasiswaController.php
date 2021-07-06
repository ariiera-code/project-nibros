<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
  public function form(){
    return view('formpendaftaran');
  }

  public function prosesForm(Request $request){
    $validateData = $request->validate([
      'nim' => 'required|size:8',
      'nama' => 'required|min:3|max:50',
      'email' => 'required|email',
      'jenis_kelamin' => 'required|in:Laki-Laki,Perempuan',
      'jurusan' => 'required',
      'alamat' => 'required'
    ]);

    return view('prosesform', ['data' => $validateData]);
  }
  public function index(){
    return view('home');
  }

  public function about(){
    return view('about');
  }

  public function mahasiswa(){
    return view('mahasiswa');
  }

  public function nama(){
    $nama = 'Nibros Ari Wibowo';
    $nilai = 100;
    $nilai1 = [80,64,30,76,95];

    return view('nama',compact('nama','nilai','nilai1'));
  }

  public function mhs(){
    $arrMahasiswa = ["Tegar Mahardika","Gaudentio Shandie","Mohammad Mujib","Alfa Surya"];

  return view('mahasiswa')->with('mahasiswa', $arrMahasiswa);
  }

  public function dsn(){
    $arrDosen = ["Fahrur , M.A.","Drs. Setyo Budi, M.M.","Sulis Wijaya, M.H.","Kevin Firmansyah, M.Kom."];

  return view('dosen')->with('dosen', $arrDosen);
  }

  public function glr(){
    return view('gallery');
  }
}
