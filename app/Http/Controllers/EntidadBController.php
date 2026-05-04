<?php

namespace App\Http\Controllers;

use App\Models\EntidadB;
use Illuminate\Http\Request;

class EntidadBController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return EntidadB::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return EntidadB::created($request->all());
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
        $item = EntidadB::findOrFail($id);
        $item->update($request->all());
        return $item;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        EntidadB::destroy($id);
        return response()->json(['mensaje' => 'Eliminado']);
    }
}
