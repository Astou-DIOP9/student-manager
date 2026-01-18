<?php

namespace App\Http\Controllers;

use App\Models\ufr;
use Illuminate\Http\Request;

class UfrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ufrs = ufr::all();
        return view('ufrs.index', compact('ufrs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ufrs = ufr::all();
        return view('ufrs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required|string|max:255',
        ]);
        ufr::create($request->all());
        return redirect()->route('ufrs.index')->with('success', 'Ufr ajoutée.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ufr $ufr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ufr $ufr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ufr $ufr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ufr $ufr)
    {


        if ($ufr->etudiants()->count() > 0) {
            return redirect()->route('ufr.index')->with('error', 'Impossible de supprimer: des filieres sont present.');
        }
        $ufr->delete();
        return redirect()->route('ufrs.index')->with('success', 'Ufr supprimée.');
    }
}
