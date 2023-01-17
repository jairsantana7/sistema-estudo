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

        @forelse ($servico as $servico)
                <tr>
                    <th>{{$servico->id}}</th>
                    <th>{{$servico->nome}}</th>
                    <th>action</th>
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
            {{-- @php (dd($servico)) --}}
    <div class="d-flex justify-content-center">
            {{-- {{dd($servico->links}} --}}
                {{$servico->links()  }}
    </div>

    <div class="float-right">
        <a class="nav-link btn-success"  aria-disabled="false" href="{{route('servicos.create')}}">Novo serviço</a>
    </div>

@stop

