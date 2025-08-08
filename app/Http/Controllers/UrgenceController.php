<?php

namespace App\Http\Controllers;

use App\Models\Urgence;
use Illuminate\Http\Request;

class UrgenceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $urgences = Urgence::all();
        return view('urgences.index', compact('urgences'));
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
    public function show(Urgence $urgence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Urgence $urgence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Urgence $urgence)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Urgence $urgence)
    {
        //
    }
}
