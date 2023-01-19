<nav class="navbar m-0 p-0 row">
    <div class="col-3 ms-1 mt-1">
        <h2>Ganga ░▒▓ Severa</h2>
    </div>
    <div id="nav" class="col-6">
        <div class="row botones">
            <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="/">Inicio</a></button>
            <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="{{route("ganga.index")}}">Llistat</a></button>
            <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="">Destacados</a></button>
            <button class="col-2 ms-1 mt-1 btn btn-warning text-center"><a href="{{route("ganga.create")}}">Añadir</a></button>
        </div>
    </div>
    <div class="col-2 text-center">
        @if(Auth::user())
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button class="btn btn-danger" style="margin-top: 5px" type="submit">Log out</button>
        </form>
        @else
        <a href="{{route('login')}}">
            @csrf
            <button class="btn btn-danger" style="margin-top: 5px" type="submit">Log in</button>
        </a>
        @endif
    </div>
</nav>