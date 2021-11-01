@extends('templates.template')
@section('content')
    <h2 class="text-center">CRUD Produtos</h2>

    <div class="text-center mt-3 mb-4">
        <a href="{{url("cadastrar")}}">
            <button class="btn btn-success">Cadastrar</button>
        </a>
    </div>

    <div style="margin-left: 10%; margin-right: 10%;">

    <table class="table" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Descrição</th>
      <th scope="col">Categoria</th>
      <th scope="col">Preço</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($produto as $produtos)
    <tr>
      <th scope="row">{{$produtos->id}}</th>
      <td>{{$produtos->nome}}</td>
      <td>{{$produtos->descricao}}</td>
      <td>{{$produtos->categoria}}</td>
      <td>R$ {{$produtos->preco}}</td>

      <td>{{$produtos->quantidade}}</td>
      <td>
            <a href="{{url("visualizar/$produtos->id")}}">
                <button class="btn btn-dark">Visualizar</button>
            </a>

            <a href="{{url("update/$produtos->id/edit")}}">
                <button class="btn btn-primary">Editar</button>
            </a>

            <a href="">
                <button class="btn btn-danger">Deletar</button>
            </a>
    </tr>
    @endforeach

  </tbody>
</table>

</div>
@endsection