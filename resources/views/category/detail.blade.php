@extends('layouts.app')

@section('title')
    Detail Kategori
@endsection

@section('content')    
  <div class="container mt-3">
    <div class="card" style="width: 18rem;">
      <div class="card-body">
        <h5 class="card-title">{{$kategori->name}}</h5>
        <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->
        <p class="card-text">{{$kategori->description}}</p>
        <a href='#' class="badge badge-success badge-pill ml-1">Edit</a>            
        <a href='#' class="badge badge-danger badge-pill  ml-1">Delete</a>
        <a href='{{ action("CategoryController@index") }}' class="card-link float-right">< Back</a>
      </div>
    </div>
  </div>
@endsection