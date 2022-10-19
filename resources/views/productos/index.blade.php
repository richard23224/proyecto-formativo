@extends('layouts.main')

@section('titulo', 'Productos')

@section('content')
    <div class="container">
        <h1>hola</h1>
    </div>
    @foreach ($productos as $item)
    <p>{{ $item->tipo}}</p>
    @endforeach

@endsection
