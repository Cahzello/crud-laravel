<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswa.index', ['mahasiswas' => $mahasiswas]);
    }

    public function create(){
        return view('form-pendaftaran');
    }

    public function store(Request $request){
        $validateData = $request->validate([
            'nim' => 'required|size:8',
            'nama' => 'required|min:3|max:50',
            'jenis_kelamin' => 'required|in:P.L',
            'jurusan' => 'required',
            'alamat' => '',
        ]);

        $mahasiswa = new Mahasiswa();
        $mahasiswa->nim = $validateData['nim'];
        $mahasiswa->nama = $validateData['nama'];
        $mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
        $mahasiswa->jurusan = $validateData['jurusan'];
        $mahasiswa->alamat = $validateData['alamat'];
        $mahasiswa->save();

        return "data berhasil diinput ke database";


    }
}
