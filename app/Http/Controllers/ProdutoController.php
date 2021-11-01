<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api\Produto;

class ProdutoController extends Controller
{
    //

    public function add(Request $request){

        try {

        $produto = new Produto;
        
        $produto->nome = $request->input('nome');
        $produto->descricao = $request->input('descricao');
        $produto->categoria = $request->input('categoria');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        
        $produto->save();

        return ['retorno'=>'ok'];
        
    }catch(\Exception $erro){

        return ['retorno'=>'erro', 'details'=>$erro];


    }
}

    public function list() {

        $produto = Produto::all();

        return $produto;


    }

    public function select($id) {

        $produto = Produto::find($id);

        return $produto;

    }

    public function update(Request $request, $id) {

        try {

            $produto = Produto::find($id);

            $produto->nome = $request->input('nome');
            $produto->descricao = $request->input('descricao');
            $produto->categoria = $request->input('categoria');
            $produto->preco = $request->input('preco');
            $produto->quantidade = $request->input('quantidade');

            $produto->save();


            return ['retorno'=>'ok', 'data'=>$request->all()];


        }catch(\Exception $erro) {

            return ['retorno'=>'erro', 'details'=>$erro];

        }

    }

    public function delete($id) {

        try {

            $produto = Produto::find($id);

            $produto->delete();

            return ['retorno'=>'ok'];



        }catch(\Exception $erro){

            return ['retorno'=>'erro', 'details'=>$erro];

        }


    }

}
