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
<x-decoracionSuperior/>
<header>
    <x-navbar/>
</header>
<main>

 <section>
    <x-banner/>
 </section>

 <section class="inicio-section-qsomos">
    <h2>¿Quiénes somos?</h2>
    <div class="container inicio-caja-qsomos">
        <div>
            <img src="https://img.lalr.co/cms/2018/08/21143425/Fundacion-Manuelita.jpg?size=xl" alt="">
        </div>
        <div>
            <h1>Transformando vidas con proposito</h1>
            <br>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, est beatae
                ? Ipsum minus ut aspernatur provident, excepturi alias earum id aliquid qui elige
                ndi architecto deserunt dignissimos odio? Non veniam repudiandae autem iusto aliquid vel 
                adipisci maiores exercitationem quasi consectetur, est, eligendi corporis eaque! Eveniet sapiente 
                distinctio consequatur reprehenderit nobis ratione.</p><br>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Mollitia quidem reprehenderit doloru
                m debitis quae dolores corrupti nulla animi excepturi ipsa. Sunt iste quo architecto voluptates.</p>
                <button class="btn1">LEER MÁS</button>
        </div>
    </div>
 </section>
</main>

@endsection