<nav class="navbar">
    <div class="navbar__logo"> <a href="#"><img src="{{asset('assets/images/logo.png')}}" alt=""></a></div>
    <ul>
        <li class="@if(Route::is('inicio')) active  @endif"><a href="#">INICIO</a></li>
        <li><a href="#">QUIENES SOMOS</a></li>
        <li><a href="#">PROYECTOS Y SERVICIOS</a></li>
        <li><a href="#">PROGRAMAS</a></li>
        <li><a href="#">CONTACTANOS</a></li>
        <li><a href="#" class="btn-donar">DONAR</a></li>
    </ul>
    <div class="navbar__toggler-container"> <img src="{{'assets/icons/hamburger.svg'}}"  id="nav-toggler"></div>
</nav>
<div class="nav-movil">

    <div class="btn-close-nav-movil"><img src="{{asset('assets/icons/x.svg')}}" alt="" id="close-nav"></div>
</div>