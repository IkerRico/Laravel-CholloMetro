@extends('layouts.plantilla')
@section('titulo', 'Index')
@section('contenido')
    <div class="row">
        <div class="col-3">
            <h2>Editando post {{$ganga->id}}</h2>
        </div>
        <div class="row">
            <form action="{{ route('ganga.update', $ganga->id) }}" method="post" class="m-5" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group row">
                    <label for="title" class="col-4 col-form-label">Title</label>
                    <div class="col-6">
                        <input id="title" name="title" type="text" class="form-control" value="{{ $ganga->title }}">
                    </div>
                    @error('title')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-4 col-form-label">Description</label>
                    <div class="col-6">
                        <textarea id="description" name="description" cols="40" rows="5" class="form-control">{{ $ganga->description }}</textarea>
                    </div>
                    @error('description')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-4 col-form-label">Url</label>
                    <div class="col-6">
                        <input id="url" name="url" type="text" class="form-control" value="{{ $ganga->url }}">
                    </div>
                    @error('url')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="category" class="col-4 col-form-label">Category</label>
                    <div class="col-6">
                        <select id="category" name="category" class="custom-select" value="{{ $ganga->category }}>
                        <option value="0">Select category</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                            </select>
                    </div>
                    @error('category')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="price" class="col-4 col-form-label">Price</label>
                    <div class="col-6">
                        <input id="price" name="price" type="text" class="form-control" value="{{ $ganga->price }}">
                    </div>
                    @error('price')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="price_sale" class="col-4 col-form-label">Price Sale</label>
                    <div class="col-6">
                        <input id="price_sale" name="price_sale" type="text" class="form-control" value="{{ $ganga->price_sale }}">
                    </div>
                    @error('price_sale')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="img" class="col-4 col-form-label">Image</label>
                    <div class="col-6">
                        <input id="img" name="img" type="file" class="form-control">
                    </div>
                    @error('img')
                    <span style="color: red;">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-6">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
