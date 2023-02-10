<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;

class ServicoController extends Controller

{
    public function index()
    {
        $servicos = Servico::simplePaginate('5');


        return view('servicos.index',
        [
            'servicos' => $servicos
        ]);
    }

    public function create()
    {
        $servicos = Servico::simplePaginate('10');

        return view('servicos.create');
    }

    public function store(Request $request)
    {
       $dados = $request->except('_token');
       Servico::create($dados);

       return redirect()->route('servicos.index');

    }

    public function edit(int $id)
    {
       $servico = Servico::findOrFail($id);


    return view('servicos.edit',
    [
        'servico' => $servico
    ]);

    }



    public function update(int $id, Request $request)
    {

        try {
            $servico = Servico::findOrFail($id);

            $dados = $request->except(['_token', '_method']);

            $servico->update($dados);
        } catch (\Throwable  $th) {
            echo 'Ocorreu um erro : '.$th->getMessage();
            return ;

        }

        return redirect()->route('servicos.index');
    //    $servico = Servico::findOrFail($id);


    //    return view('servicos.edit',
    //    [
    //        'servico' => $servico
    //    ]);

       //return redirect()->route('servicos.index');

    }
}
