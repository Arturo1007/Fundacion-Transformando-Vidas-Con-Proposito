@extends('layout')
@section('title','Transformando vidas con proposito')
@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
@endsection
@section('js') 
<script src="{{asset('js/main.js')}}"></script> 
@endsection
@section('content')
<header>
    <x-navbar/>
    <div style="height: 500px;"> <img src="{{asset('assets/images/banner2.jpg')}}" alt="" style="object-fit: cover"></div>
</header> 
<main>
    
</main>

@endsection