<?php

// app/Models/DossierPatient.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DossierPatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'antecedents_medicaux',
        'medecin_referent_id',
    ];

    // Relation avec le patient
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    // Relation avec le médecin référent
    public function medecinReferent()
    {
        return $this->belongsTo(Medecin::class, 'medecin_referent_id');
    }
}
