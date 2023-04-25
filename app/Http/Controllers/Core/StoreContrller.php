<?php

namespace App\Http\Controllers\Core;

use App\Http\Controllers\Controller;
use App\Models\Core\Store;
use Illuminate\Http\Request;

class StoreContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Store::all();

        return response()->json(['data' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) // fazer inserção
    {
        $data = $request->all(); // pega todos os dados

        Store::create($data); // cria o registro

        return response()->json(['data' => $data]);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) // faz de um único item
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)  // faz a atualização
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) // faz a remoção
    {
        //
    }
}
