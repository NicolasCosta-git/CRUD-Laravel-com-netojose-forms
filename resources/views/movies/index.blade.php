@extends('layouts.app')
@section('content')

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-3">
                <h1 class="text-center">Filmes</h1>
                <hr>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="{{ route('movies.create') }}" class="col-md-12 btn btn-lg btn-success ">Adicionar filme</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                @forelse ($data as $movie)
                    {!! Form::open()->delete()->route('movies.destroy', [$movie->id]) !!}
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="card-title h1">
                                {{ $movie->title }}
                                <hr>
                            </div>
                            <div class="h6 mb-4">{{ 'lançado em ' . $movie->year }}</div>
                            <div class="h3">{{ $movie->synopsis }}</div>
                            <div class="d-flex justify-content-center">
                                <a href="{{ route('movies.edit', [$movie->id]) }}" class="btn btn-lg btn-info mr-3">Editar</a>
                                <button action="submit" class="btn btn-lg btn-danger">Deletar</button>
                                <a href="{{ route('movies.show', [$movie->id]) }}"
                                    class="btn btn-lg btn-secondary ml-3">Ver</a>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                @empty
                    <p class="h2 text-center">Não existem filmes registrados</p>
                @endforelse

            </div>
        </div>
    </div>


@endsection
