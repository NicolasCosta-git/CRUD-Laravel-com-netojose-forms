@extends('layouts.app')
@section('content')


    <div class="container">
        {!! Form::open()->delete()->route('movies.destroy', [$movie->id]) !!}
        <div class="row align-items-center card">
            <div class="col-6">
                <div class="card-body text-center">
                    <h1 class="card-label my-3">{{ $movie->title }}</h1>
                    <hr>
                    <h6 class="mb-3">{{ $movie->year }}</h6>
                    <p class="h5 mb-5">{{ $movie->synopsis }}</p>
                    <div class="d-flex justify-content-center">
                        <a href="{{ route('movies.edit', [$movie->id]) }}" class="btn btn-lg btn-info mr-3">Editar</a>
                        <button action="submit" class="btn btn-lg btn-danger">Deletar</button>
                        <a href="{{ route('movies.index') }}" class="btn btn-lg btn-secondary ml-3">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
        {!!Form::close()!!}  
    </div>

@endsection
