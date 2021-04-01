@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row align-items-center card">
        <div class="col-6">
            <div class="card-body">
                <h2 class="mb-4 text-center">
                    Editar filme
                    <hr>
                </h2>
                <div class="">
                    {!!Form::open()->put()->route('movies.update',[$movie->id])->fill($movie)!!}
                    @include('movies._form')
                    {!!Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection