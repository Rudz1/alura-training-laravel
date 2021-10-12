@extends('layout')

@section('header')
Series
@endsection

@section('content')

@if(!empty($message))
<div class="alert alert-success">
{{ $message }}
</div>
@endif

<a href="series-add-form" class="btn btn-dark mb-2">Adicionar</a>

<ul class="list-group">
    @foreach($series as $serie)
    
    <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->name }}
    <form method="POST" action="/series-delete/{{ $serie->id }}" onsubmit="return confirm('Tem certeza que deseja excluir {{ addslashes($serie->name) }}')">
        
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" ><i class="fas fa-trash-alt"></i></button>
    </form>
    </li>
    @endforeach
</ul>
</div>
@endsection
