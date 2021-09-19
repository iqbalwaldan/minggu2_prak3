@extends('layout.mockup')

@section('title', 'Komentar')

@section('Judul Halaman')
    <h1>Komentar Politeknik Negeri Malang</h1>
@endsection

@section('isi')
    <p class="sub">Selamat Datang Di Webside Komentar Jurusan Teknologi Informasi Politeknik Negeri Malang.</p>
    <dl>
        <dt>Pengirim : {{$nama}}</dt>
        <dd>{{$pesan}}</dd>
    </dl>
@endsection