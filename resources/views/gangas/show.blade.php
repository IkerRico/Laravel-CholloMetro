@extends('layouts.plantilla')
@section('titulo', 'Inici')
@section('contenido')
<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh;">
    <div class="card" style="max-width: 100%;">
        <img src={{asset("/storage/img/$ganga->id-ganga-severa.jpg")}} class="card-img-top" alt="Product Image" style="height: 400px;">
        <div class="card-body">
            <h4 class="card-title text-center">{{$ganga->title}}</h4>
            <p class="card-text text-center">{{$ganga->description}}</p>
            <div class="d-flex justify-content-center">
                <p class="card-text text-muted">Available Price: <s>{{$ganga->price}}€ </s></p>
                <p class="card-text text-success">&nbsp Sale Price: {{$ganga->price_sale}}€</p>
            </div>
            <div class="d-flex justify-content-center">
                <p class="card-text">&nbsp{{$ganga->likes}} <i class="bi bi-hand-thumbs-up"></i></p>
                <p class="card-text">&nbsp{{$ganga->unlikes}} <i class="bi bi-hand-thumbs-down"></i></p>
            </div>
            <div class="d-flex justify-content-center">
            <p class="card-text"> <?= $ganga->aviable == 1 ? 'Aviable' : 'Not aviable' ?> </p>
            </div>
        </div>
    </div>
</div>
@endsection