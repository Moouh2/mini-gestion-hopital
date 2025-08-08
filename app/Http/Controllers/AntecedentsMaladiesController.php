<?php

namespace App\Http\Controllers;

use App\Models\AntecedentsMaladies;
use Illuminate\Http\Request;

class AntecedentsMaladiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $antecedentsMaladies = AntecedentsMaladies::all();
        return view('antecedentsMaladies.index', compact('antecedentsMaladies'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AntecedentsMaladies $antecedentsMaladies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AntecedentsMaladies $antecedentsMaladies)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AntecedentsMaladies $antecedentsMaladies)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AntecedentsMaladies $antecedentsMaladies)
    {
        //
    }
}
