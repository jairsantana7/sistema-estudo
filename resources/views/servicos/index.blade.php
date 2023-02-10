@extends('adminlte::page')

@section('title', 'Serviços')

@section('content_header')
    <h1>Serviços</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
        </thead>
        <tbody>

        @forelse ($servicos as $servico)
                <tr>
                    <th>{{$servico->id}}</th>
                    <th>{{$servico->nome}}</th>
                    <th><a class="btn btn-primary btn-sm " href="{{route('servicos.edit', ['servico' => $servico->id])}}">Editar</a></th>
                </tr>


        @empty

                <tr>
                    <th></th>
                    <th>Nenhum registro foi encontrado!</th>
                    <th></th>
                </tr>

        @endforelse


        </tbody>
    </table>
    <div class="d-flex justify-content-center">
                {{$servicos->links()  }}
    </div>

    <div class="float-right">
        <a class="nav-link btn-success"  aria-disabled="false" href="{{route('servicos.create')}}">Novo serviço</a>
    </div>

@stop

