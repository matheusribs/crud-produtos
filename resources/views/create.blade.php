@extends('templates.template')
@section('content')
    <style type="text/css">
    .form-control{
        margin-bottom: 8px;

    }
    </style>
    <h2 class="text-center">@if(isset($produto)) Editar @else Cadastrar @endif</h2>

    <div style="margin-left: 20%; margin-right: 20%;">

        <form name="formCad" id="formCad" method="post" action="{{url("produtos")}}">
        @csrf
        <input class="form-control" type="text" name="nome" value="{{$produtos->nome ?? ''}}" id="nome" placeholder="Nome do Produto">
        <input class="form-control" type="text" name="descricao" id="descricao" placeholder="Descrição">
        <input class="form-control" type="text" name="categoria" id="categoria" placeholder="Categoria">
        <input class="form-control" type="text" name="preco" id="preco" placeholder="Preço">
        <input class="form-control" type="text" name="quantidade" id="quantidade" placeholder="Quantidade">
        <input class="btn btn-primary" type="submit" value="Cadastra">
        <a href="{{url("produtos")}}"><input class="btn btn-danger"  value="Voltar">


        </form>

</div>
@endsection