<div class="text-center mb-4">

    {!!Form::text('title','<h3 class="card-label">Título</h3>')->required()!!}
</div>
<div class="text-center mb-4">
    {!!Form::text('year', '<h2 class="card-label">Ano de lançamento</h2>')->required()!!}
</div>
<div class="text-center mb-4">
    {!!Form::textarea('synopsis', '<h2 class="card-label">Sinopse</h2>')->lg()->required()!!}
</div>
<div class="d-flex justify-content-center">
<button type="submit" class="btn btn-lg btn-success mr-3">Salvar</button>
<a href="{{route('movies.index')}}" class="btn btn-lg btn-secondary">Voltar</a>
</div>