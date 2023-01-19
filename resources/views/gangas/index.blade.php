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
                <div style="display: flex; gap: 10px; align-content: center; justify-content: center">
                    <a class="btn btn-success col-3" style="height: 30px; width: 80px" href="{{route('ganga.show', $ganga->id)}}"><i class="bi bi-eye"></i></a>
                    @if(Auth::check() && Auth::user()->id === $ganga->user->id)
                    <a class="btn btn-warning col-3" style="height: 30px; width: 80px" href="{{route('ganga.edit', $ganga->id)}}"><i class="bi bi-pencil"></i></a>
                    <form class="" action="{{route('ganga.destroy' , $ganga->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" style="height: 30px; width: 80px" type="submit"><i class="bi bi-trash"></i></button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{ $gangas->links() }}
</div>
@endsection