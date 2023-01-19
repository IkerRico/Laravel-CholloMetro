<?php

use Illuminate\Support\Facades\Auth;
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand col-3" href="#">Ganga ░▒▓ Severa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="nav" class="col-7">
            <div class="row botones">
                <span class="col-1"></span>
                <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="/">Inicio</a></button>
                <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="{{route("ganga.index")}}">Llistat</a></button>
                <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="">Destacados</a></button>
                @if(Auth::check())
                <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="{{route("ganga.create")}}">Añadir</a></button>
                @endif
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?= Auth::user() ? ucfirst(Auth::user()->name) : 'Invitado' ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">
                                @if(Auth::user())
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item" :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                                @else
                                <a class="dropdown-item" href="{{route('login')}}">
                                    Log in
                                </a>
                                @endif
                            </a></li>
                        <li><a class="dropdown-item" href="#">Mis gangas</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>