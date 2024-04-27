@extends('layouts.index')
@section('title', 'Sistema de veterinario')
@section('content')
    <div class="col-md-4">
        {{-- Form --}}
        @if(session('success'))
            @include('layouts.errors')
        @endif
        <form action="{{route('principal.create')}}" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Titulo</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                @error('title')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
                @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="description">Descripcion</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
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