<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index()
    {
        return Produto::all();
    }

    public function show($id)
    {
        $produto = Produto::find($id);
        return $produto;
    }

    public function store(Request $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->codigo = $request->codigo;
        $produto->categoria = $request->categoria;
        $produto->status = $request->status;
        $produto->save();
        return true;
    }

    public function update(Request $request, $id)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->preco = $request->preco;
        $produto->codigo = $request->codigo;
        $produto->categoria = $request->categoria;
        $produto->status = $request->status;
        $produto->update();
        return true;
    }

    public function destroy($id)
    {
        $produto = Produto::find($id);
        $produto->delete();
        return response()->json([
            'message'=>'Produto excluido!'
        ]);
    }


}
