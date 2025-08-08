<?php

// app/Http/Controllers/DossierPatientController.php

namespace App\Http\Controllers;

use App\Models\DossierPatient;
use Illuminate\Http\Request;

class DossierPatientController extends Controller
{
    // Méthode pour afficher la liste des dossiers patients
    public function index()
    {
        $dossiersPatients = DossierPatient::all();
        return view('dossiersPatients.index', compact('dossiersPatients'));
    }

    // Méthode pour créer un nouveau dossier patient
    public function create(Request $request)
    {
        // Validation des données
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'antecedents_medicaux' => 'nullable|string',
            'medecin_referent_id' => 'nullable|exists:medecins,id',
        ]);

        // Création du dossier patient
        $dossierPatient = DossierPatient::create($validatedData);

        // Retourner une réponse appropriée (redirection, vue, etc.)
    }

    // Méthode pour consulter et mettre à jour les informations du dossier patient
    public function show($id)
    {
        $dossierPatient = DossierPatient::findOrFail($id);

        // Retourner la vue avec les informations du dossier patient
        // ou retourner les données au format JSON pour une API, par exemple
    }
}

