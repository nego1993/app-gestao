<?php

namespace App\Http\Controllers;

use App\Models\MotivoContato;
use App\Models\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        $motivoContato = MotivoContato::all();

        return view('site.contato', ['motivoContato' => $motivoContato]);
    }

    public function salvar(Request $request)
    {
        $regras = [
            'nome'           => 'required|min:3|max:40',
            'telefone'       => 'required',
            'email'          => 'email|required',
            'motivo_contatos_id' => 'required',
            'mensagem'       => 'required|max:2000',
        ];

        $feedback = [
            'motivo_contatos_id.required' => 'O motivo tem que ser preenchido',
            'required' => 'O campo :attribute precisa ser preenchido',
            'email' => 'O e-mail informado não é valido',
        ];
        $request->validate($regras, $feedback);

        SiteContato::create($request->all());
        return redirect()->route('principal');
    }
}
