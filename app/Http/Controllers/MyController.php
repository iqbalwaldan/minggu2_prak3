<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang';
    }

    public function mi(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang Prodi Manajemen Informatika';
    }

    public function ti(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang Prodi Teknik Informatika';
    }
}
