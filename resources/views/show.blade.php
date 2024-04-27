@extends('layouts.index')
@section('title', 'Editar elemento')
@section('content')
<div class="col-md-4"></div>
<div class="col-md-4 text-center">
    <a href="{{route('/')}}">Regresar</a>
    <form action="{{route('principal.update', $animal->id)}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{$animal->titulo}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{$animal->nombre}}">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="description">Descripcion</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{$animal->descripcion}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
        </form>
</div>
<div class="col-md-4"></div>
@endsection