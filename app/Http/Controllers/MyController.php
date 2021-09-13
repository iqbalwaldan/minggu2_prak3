<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang';
    }

    public function mi(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Prodi Manajemen Informatika';
    }

    public function ti(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Prodi Teknik Informatika';
    }

    public function news($id){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman News '. $id;
    }
}
