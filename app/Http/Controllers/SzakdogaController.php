<?php

namespace App\Http\Controllers;

use App\Models\Szakdoga;
use Illuminate\Http\Request;

class SzakdogaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $szakdogak = Szakdoga::all();

        return response()->json($szakdogak);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'szakdoga_nev' => 'required|string|max:255',
            'githublink' => 'required|url',
            'oldallink' => 'required|url',
            'tagok_neve' => 'required|string'
        ]);

        $szakdoga = Szakdoga::create($validated);

        return response()->json($szakdoga, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Szakdoga $szakdoga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Szakdoga $szakdoga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $szakdoga = Szakdoga::find($id);

        if (!$szakdoga) {
            return response()->json(['message' => 'Nincs találat'], 404);
        }

        $validated = $request->validate([
            'szakdoga_nev' => 'sometimes|required|string|max:255',
            'githublink' => 'sometimes|required|url',
            'oldallink' => 'sometimes|required|url',
            'tagok_neve' => 'sometimes|required|string'
        ]);

        $szakdoga->update($validated);

        return response()->json($szakdoga);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $szakdoga = Szakdoga::find($id);

        if ($szakdoga) {
            $szakdoga->delete();
            return response()->json(['message' => 'Sikeres törlés'], 200);
        }

        return response()->json(['message' => 'Nem található'], 404);
    }
}
