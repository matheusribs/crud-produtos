@extends('templates.template')
@section('content')
    <h2 class="text-center">Visualizar</h2>

    <div style="margin-left: 10%; margin-right: 10%;">

        Nome: {{$produto->nome}} <br>
        Descrição: {{$produto->descricao}} <br>
        Categoria:{{$produto->categoria}} <br>
        Preço: R$ {{$produto->preco}} <br>
        Quantidade: {{$produto->quantidade}} <br>
        <a href="{{url("produtos")}}"><button class="btn btn-danger">Voltar</button></a>

</div>
@endsection