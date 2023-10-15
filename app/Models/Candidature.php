<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'sexe',
        'nationnalite',
        'date_de_naissance',
        'lieu_de_naissance',
        'examen',
        'statut',
        'filiere',
        'ecole_d_origine',
        'serie_du_bac',
        'matricule',
        'points_au_bac',
        'mention',
        'centre_de_composition',
        'numero_de_table',
        'ville',
        'telephone_1',
       'telephone_2',
        'email',
        'photo',
        'etat',
        'user_id',
    ];


    public function user(){
        return $this->belongsTo(User::class);
    }
    
}
