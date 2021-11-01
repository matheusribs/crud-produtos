<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Api\Produto;

class ViewController extends Controller
{
    public $objProduto;

    public function __construct(){

        $this->objProduto=new Produto();



    }
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $produto=$this->objProduto->all();
        return view('index',compact('produto'));
        //dd($this->objProduto->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $produto=$this->objProduto->all();
        return view('create', compact('produto'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->objProduto->create([

            'nome'=>request('nome'),
            'descricao'=>request('descricao'),
            'categoria'=>request('categoria'),
            'preco'=>request('preco'),
            'quantidade'=>request('quantidade')


        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produto=$this->objProduto->find($id);
        return view('show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produto=$this->objProduto->find($id);
        return view('create', compact('produto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->objProduto->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'categoria'=>$request->categoria,
            'preco'=>$request->preco,
            'quantidade'=>$request->quantidade         
            
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
