@extends('layouts.app')

@section('title')
    Aplikasi Toko Online
@endsection

@section('content')
    @component('alert', ['type' => 'success'])
        Alert - Latihan Berhasil
    @endcomponent
    <b>Ini konten coy</b>
@endsection

