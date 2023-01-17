@extends('adminlte::page')

@section('title', 'Serviços')

@section('content_header')
    <h1>Cadatro de Serviço</h1>
@stop

@section('content')

    <form action="{{route('servicos.store')}}" method="POST" class="row g-3 needs-validation" novalidate>
        @include('servicos._form')

    </form>


@stop

