<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function index(){
        return view('home');
    }

    public function mi(){
        return view('mi');
    }

    public function ti(){
        return view('ti');
    }

    public function news($id){
        return view('news',['id' => $id]);
    }

    public function perkantoran(){
        return view('perkantoran');
    }

    public function laboratorium(){
        return view('laboratorium');
    }
    
    public function kelas(){
        return view('kelas');
    }

    public function lainnya(){
        return view('lainnya');
    }

    public function about(){
        return view('about-us');
    }

    public function comment($nama,$pesan){
        return view('comment',['nama' => $nama],['pesan' => $pesan]);
    }
}
