@extends('layouts.plantilla')
@section('titulo', 'Inici')
@section('contenido')
<div class="row">
    <div class="col-3">
        <h2>Llistats Post</h2>
    </div>
</div>
<div class="row d-flex flex-row ms-5 me-3">
@foreach($gangas as $ganga)
    <div class="col-3 p-3">
        <div class="card" style="width: 18rem;">
            <img src={{asset("/storage/img/$ganga->id-ganga-severa.jpg")}} class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$ganga->title}}</h5>
                <p class="card-text">{{$ganga->description}}</p>
                <del>Precio: {{$ganga->price}} €</del>
                <p>Ganga: {{$ganga->price_sale}} €</p>
                <a href="{{route('ganga.show', $ganga->id)}}" class="btn btn-primary" style="margin-left: 25%;">Ver oferta</a>
            </div>
        </div>
    </div>
    @endforeach
    {{ $gangas->links() }}
</div>
@endsection
