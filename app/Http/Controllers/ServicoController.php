<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ServicoController extends Controller

{
    public function index()
    {
        $servicos = Servico::simplePaginate('5');


        return view('servicos.index',
        [
            'servico' => $servicos
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
}
