<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use App\Models\Ufr;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $filieres = Filiere::with('ufr')->paginate(10);
        return view('filieres.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ufrs = Ufr::all();
        return view('filieres.create', compact('ufrs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'ufr_id' => 'required|exists:ufrs,id',
        ]);

        Filiere::create($request->all());

        return redirect()->route('filieres.index')->with('success', 'Filière ajoutée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filiere $filiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        if ($filiere->etudiants()->count() > 0) {
            return redirect()->route('filieres.index')->with('error', 'Impossible de supprimer: des étudiants sont present.');
        }
        $filiere->delete();
        return redirect()->route('filieres.index')->with('success', 'Filière supprimée.');
    }
}
