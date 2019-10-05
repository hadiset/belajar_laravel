@extends('layouts.app')

@section('title')
    Daftar Kategori
@endsection

@section('content')
    <p>TODO: list daftar kategori</p>
    {{-- Menampilkan daftar kategori --}}
    {{$daftar_kategori[0]->name}}

    @foreach($daftar_kategori as $kategori)
        {{-- Menampilkan semua kategori dengan foreach --}}
        <h1>{{$kategori->id}} . {{$kategori->name}}</h1>            
    @endforeach

    <hr />
    {{-- INI PAGINATION--}}
    {{$daftar_kategori->links()}}

    @if($daftar_kategori[0]->name == 'Elektronik')
    {{-- Munculkan sidebar kiri --}}
    <div>Munculkan sidebar kiri</div>

    @elseif($daftar_kategori[0]->name == 'Ransel')
    {{-- Munculkan sidebar kanan --}}
    <div>Munculkan sidebar kanan</div>

    @else
    {{-- Jangan munculkan sidebar --}}
    <div>Tidak ada sidebar</div>
    @endif

    @unless($daftar_kategori[0]->name == 'Tas')
    {{-- Ekseskudi kode kalo nilai salah --}}
        Kamu belum keren
    @endunless
@endsection