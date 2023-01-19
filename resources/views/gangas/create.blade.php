@extends('layouts.plantilla')
@section('titulo', 'Inici')
@section('contenido')
<div class="col-3">
    <h2>Create Post</h2>
</div>
<div class="row">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <form action="{{ route('ganga.store') }}" method="post" class="m-5">
        @csrf
        <div class="form-group row">
            <label for="title" class="col-4 col-form-label">Title</label>
            <div class="col-6">
                <input id="title" name="title" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="description" class="col-4 col-form-label">Description</label>
            <div class="col-6">
                <textarea id="description" name="description" cols="40" rows="5" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group row">
            <label for="url" class="col-4 col-form-label">Url</label>
            <div class="col-6">
                <input id="url" name="url" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="category" class="col-4 col-form-label">Category</label>
            <div class="col-6">
                <select id="category" name="category" class="custom-select">
                    <option value="0">Select category</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="price" class="col-4 col-form-label">Price</label>
            <div class="col-6">
                <input id="price" name="price" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-4 col-6">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
    @endsection