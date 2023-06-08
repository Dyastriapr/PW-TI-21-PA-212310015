<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    static private $data = array(
        ['id' => 1 , 'npm' => "212310015" , 'nama' => "Dyas Tri Apriliansyah", 'prodi'=> 'Teknologi Informasi'],
        ['id' => 2 , 'npm' => "212310018" , 'nama' => "Fathurahman ALfarizki", 'prodi'=> 'Teknologi Informasi'],
        ['id' => 3 , 'npm' => "212310019" , 'nama' => "Anandes Ramadhan Putra", 'prodi'=> 'Teknologi Informasi']
    );
    public function index() {
        return view('mahasiswa', ['data' => self::$data]);
    }
}
