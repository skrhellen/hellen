<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados = aluno::all();

       // dd($dados); //debug

        return view("aluno.list", ["dados" => $dados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view("aluno.form");

        }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Aluno::create(
            [
                'nome' => $request->nome,
                'telefone' =>$request->telefone,
                'cpf' => $request-> cpf,
            ]
            );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dado = Aluno::findOrfail($id);

        $dado->delete();

        return redirect('Aluno');
    }
    public function search(Request $request)
    {
        if (!empty($request->nome)){
            $dados = Aluno ::where(
                "nome",
                "like",
                "%" . $request->nome. "%"
            )->get();
        } else {
            $dados = Aluno::all();
        }

       // dd($dados); //debug

        return view("aluno.list", ["dados" => $dados]);
    }

}
