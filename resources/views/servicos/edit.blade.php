@extends('adminlte::page')

@section('title', 'Serviços')

@section('content_header')
    <h1>Edição de Serviço</h1>
@stop

@section('content')

    <form action="{{route('servicos.update', $servico)}}" method="POST" class="row g-3 needs-validation" novalidate>
        @method('put')

        @include('servicos._form')

    </form>


@stop

