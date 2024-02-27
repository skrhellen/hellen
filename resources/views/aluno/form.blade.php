@extends('base')
@section('contudo')

<form action="{{ rout('aluno.store')}}" method="post">

    @csrf

    <label for="">Nome</label><br>
    <input type="text" name="name" ><br>

    <label for="">Telefone</label><br>
    <input type="text" name="Telefone" ><br>

    <label for="">CPF</label><br>
    <input type="text" name="cpf" ><br>

    <button type="submite">Salvar</button>
    <button><a href="{{url('aluno') }}">Voltar</a></button>

</form>

@stop
