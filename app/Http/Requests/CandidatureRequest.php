<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Models\Candidature;

class CandidatureRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "nom" =>['required','string','max:255'] ,
            "prenom" =>['required','string','max:255'] ,
            "date_de_naissance" =>['required','string','max:255'] ,
            "lieu_de_naissance" =>['required','string','max:255'] ,
            "sexe" =>['required','string','max:255'] ,
            "statut" =>['required','string','max:255'] ,
            "nationnalite" =>['required','string','max:255'] ,
            "telephone_1" =>['required',] ,
            "examen" =>['required','string','max:255'] ,
            "filiere" =>['required','string','max:255'] ,
            "ecole_d_origine" =>['required','string','max:255'] ,
            "matricule" =>['required','string','max:255', Rule::unique(Candidature::class)] ,
            "serie_du_bac" =>['required','string','max:255'] ,
            "mention" =>['required','string','max:255'] ,
            "points_au_bac" =>['required',] ,
            "numero_de_table" =>['required','string','max:255'] ,
            "ville" =>['required','string','max:255'] ,
            "centre_de_composition" =>['required','string','max:255'] ,
            "email" =>['required','string','max:255'] ,
            "user_id" =>['required']




        ];
    }
}
