@extends('layouts.app')

@section('title')
    Daftar Kategori
@endsection

@section('content')
    <!-- <p>TODO: list daftar kategori</p>
    {{-- Menampilkan daftar kategori --}}
    {{$daftar_kategori[0]->name}} -->
    <div class="container mt-4">
        <div class="row">
        <div class="col-md-5">
            <ul class="list-group">
            @foreach($daftar_kategori as $kategori)
                <li class="list-group-item">
                    {{-- Menampilkan semua kategori dengan foreach --}}
                    {{$kategori->name}}
                    <a href='#' class="badge badge-danger badge-pill float-right ml-1">Delete</a>            
                    <a href='#' class="badge badge-success badge-pill float-right ml-1">Edit</a>            
                    <a href='{{ action("CategoryController@show", ["id" => $kategori->id]) }}' class="badge badge-primary badge-pill float-right ml-1">View</a>            
                </li>                
            @endforeach       
            </ul>
        </div>            
        </div>
    </div>
    
    

    <hr />
    {{-- INI PAGINATION--}}
    {{$daftar_kategori->links()}}
    
    <!-- @if($daftar_kategori[0]->name == 'Elektronik')
    {{-- Munculkan sidebar kiri --}}
    <div>Munculkan sidebar kiri</div>

    @elseif($daftar_kategori[0]->name == 'Ransel')
    {{-- Munculkan sidebar kanan --}}
    <div>Munculkan sidebar kanan</div>

    @else
    {{-- Jangan munculkan sidebar --}}
    <div>Tidak ada sidebar</div>
    @endif -->

    <!-- @unless($daftar_kategori[0]->name == 'Tas')
    {{-- Ekseskudi kode kalo nilai salah --}}
        Kamu belum keren
    @endunless -->
@endsection