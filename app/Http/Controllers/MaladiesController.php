<?php

namespace App\Http\Controllers;

use App\Models\Maladie;
use Illuminate\Http\Request;

class MaladiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $maladies = Maladie::all();
        return view('maladies.index', compact('maladies'));
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
    public function show(Maladie $maladie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Maladie $maladie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Maladie $maladie)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Maladie $maladie)
    {
        //
    }
}
