@extends('layout')
@section('title','Transformando vidas con proposito')
@section('css')
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="{{asset('css/bootstrapContainer.css')}}">
<link rel="stylesheet"href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
@endsection
@section('js') 
 {{-- Carrusel --}}
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="{{asset('js/main.js')}}"></script>
@endsection
@section('content')
<x-decoracion-superior/>
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
            <h3>Transformando vidas con proposito</h1>
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
 <section class="inicio-section-noticias">
    <h2>Últimas Noticias</h2>
    <div class="container inicio-caja-noticias" style="height: auto;width: 100%;overflow: hidden;">
        <div class="swiper-wrapper">
            <div class="noticia-box swiper-slide">
              <div><img src="https://www.cartagena.gov.co/images/thumbnails/mod_minifrontpage/5396_298.png" alt=""></div>
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex repudiandae suscipit</a></h3>
              <p class="not-fecha">20/07/2022</p>
              <p class="not-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam placeat architecto, quo soluta commodi et impedit enim</p>
            </div> 
            <div class="noticia-box swiper-slide">
                <div><img src="https://www.cartagena.gov.co/images/thumbnails/mod_minifrontpage/5399_298.jpg" alt=""></div>
                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex repudiandae suscipit</a></h3>
                <p class="not-fecha">20/07/2022</p>
                <p class="not-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam placeat architecto, quo soluta commodi et impedit enim</p>
              </div> 
              <div class="noticia-box swiper-slide">
                <div><img src="https://www.cartagena.gov.co/images/thumbnails/mod_minifrontpage/5396_298.png" alt=""></div>
                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex repudiandae suscipit</a></h3>
                <p class="not-fecha">20/07/2022</p>
                <p class="not-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam placeat architecto, quo soluta commodi et impedit enim</p>
              </div> 
              <div class="noticia-box swiper-slide">
                <div><img src="https://www.cartagena.gov.co/images/thumbnails/mod_minifrontpage/5396_298.png" alt=""></div>
                <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora ex repudiandae suscipit</a></h3>
                <p class="not-fecha">20/07/2022</p>
                <p class="not-descrip">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam placeat architecto, quo soluta commodi et impedit enim</p>
              </div> 
        </div>
        <div class="swiper-pagination-noticias"></div>
    </div>
 </section>
</main>
@endsection