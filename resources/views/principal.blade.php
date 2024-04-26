@extends('layouts.index')
@section('title', 'Sistema de veterinario')
@section('content')
    <div class="col-md-4">
        {{-- Form --}}
        <form action="" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="description">Descripcion</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
    <div class="col-md-8">
        {{-- Table --}}
    </div>
@endsection