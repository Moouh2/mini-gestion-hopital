<?php

namespace App\Http\Controllers;

use App\Models\DossierPatientActesMedicaux;
use Illuminate\Http\Request;

class DossierPatientActesMedicauxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dossiersPatientsActesMedicaux = DossierPatientActesMedicaux::all();
        return view('dossiersPatientsActesMedicaux.index', compact('dossiersPatientsActesMedicaux'));
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
    public function show(DossierPatientActesMedicaux $dossierPatientActesMedicaux)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DossierPatientActesMedicaux $dossierPatientActesMedicaux)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DossierPatientActesMedicaux $dossierPatientActesMedicaux)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DossierPatientActesMedicaux $dossierPatientActesMedicaux)
    {
        //
    }
}
