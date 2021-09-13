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
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman NEWS '. $id;
    }

    public function perkantoran(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Saranan Perkantoran';
    }

    public function laboratorium(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Saranan Laboratorium';
    }
    
    public function kelas(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Saranan Kelas';
    }

    public function lainnya(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Saranan Lainnya';
    }

    public function about(){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman About Us';
    }

    public function comment($nama,$pesan){
        return 'Selamat Datang Di Webside Jurusan Teknologi Informasi Politeknik Negeri Malang, Halaman Pesan, Nama = ' . $nama . ' dengan Pesan = ' . $pesan;
    }
}
