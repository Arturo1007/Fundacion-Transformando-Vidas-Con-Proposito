@extends('layout')
@section('title','Transformando vidas con proposito')
@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrapContainer.css')}}">
<link rel="stylesheet"href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
@endsection
@section('js') 
<script src="{{asset('js/main.js')}}"></script>
 {{-- Carrusel --}}
 <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section('content')
<div class="franja-top"></div>
<div class="container clogo">
    <div>
        <img src="{{asset('assets/images/logo-texto.png')}}" alt="">
    </div>
</div>
<header>
    <x-navbar/>
</header>
<main>
 <section>
    <x-banner/>
 </section>
 <section class="container">
 </section>
    
</main>

@endsection