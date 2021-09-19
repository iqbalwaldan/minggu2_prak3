@extends('layout.mockup')

@section('title', 'Berita')

@section('Judul Halaman')
    <h1>Berita {{ $id }} Politeknik Negeri Malang</h1>
@endsection

@section('isi')
    <p class="sub">Selamat Datang Di Webside Berita Jurusan Teknologi Informasi Politeknik Negeri Malang.</p>
    <p>
        Politeknik Negeri Malang Memiliki banyak info mengenai pengadaa beasiswa, pelatihan, pendaftaran, dll. Berita tersebut daapat diakses 
        di Webside Berita Politeknik Negeri Malang
    </p>
@endsection