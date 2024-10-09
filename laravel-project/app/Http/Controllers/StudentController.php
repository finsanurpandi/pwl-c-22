<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        // send data to view via array
        // $data['nama'] = 'Nama Mahasiswa';
        // $data['kelas'] = 'IF B 2022';
        // $data['prodi'] = 'Teknik Informatika';

        // return view('student.index', $data);

        // sent data via compact method
        $nama = 'Nama Mahasiswa';
        $kelas = 'IF B 2022';
        $prodi = '<strong>Teknik Informatika</strong>';
        $alphabets = ['a', 'b', 'c', 'd', 'e', 'f'];

        return view('student.index', compact('nama', 'kelas', 'prodi', 'alphabets'));
    }
}
