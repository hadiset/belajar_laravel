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
            <a href='#' class="btn btn-primary mb-4" data-toggle="modal" data-target="#categoryModal">Tambah Kategori</a>
            <ul class="list-group">
            @foreach($daftar_kategori as $kategori)
                <li class="list-group-item">
                    {{-- Menampilkan semua kategori dengan foreach --}}
                    {{$kategori->name}}
                    <a href='{{ action("CategoryController@destroy", ["id" => $kategori->id]) }}' class="badge badge-danger badge-pill float-right ml-1">Delete</a>            
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

<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="categoryModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="categoryModalLabel">Tambah Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action='{{action("CategoryController@store")}}' method='POST'>
        @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Nama Kategori, ex: Tas" name="name">
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <input type="text" class="form-control" id="description" placeholder="Deskripsi Singkat Kategori" name="description">
            </div>        
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
      </form>
    </div>
  </div>
</div>    
    
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