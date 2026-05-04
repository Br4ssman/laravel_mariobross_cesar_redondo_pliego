<?php

namespace App\Http\Controllers;

use App\Models\EntidadA;
use Illuminate\Http\Request;

class EntidadAController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EntidadA::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return EntidadA::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = EntidadA::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EntidadA::destroy($id);
        return response()->json(['mensaje' => 'Eliminado']);
    }
}
