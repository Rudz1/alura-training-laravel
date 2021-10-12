@extends('layout')

@section('header')
Adicionar Serie
@endsection

@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="series-add-save">
    @csrf
    <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" name="name" class="form-control">
    </div>

    <button class="btn btn-primary">Adicionar</button>
</form>

@endsection



