<?php

namespace App\Http\Controllers;
use App\Models\Candidature;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Exports\CandidatureExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class CandidatureController extends Controller
{
    //


    public function show(){

        $candidatures=Candidature::where('user_id',Auth::user()->id)->paginate(15);
        return view('dashboarduser.candidature.liste', [
            'candidatures'=>$candidatures,
        ]);
    }
    public function form(){
        return view('dashboarduser.candidature.ajout');
    }

    public function create(Request $request){



        $inputs = $request->input();

       Validator::make($inputs,[
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
      "points_au_bac" =>['required'] ,
      "numero_de_table" =>['required','string','max:255'] ,
      "ville" =>['required','string','max:255'] ,
      "centre_de_composition" =>['required','string','max:255'] ,
      "email" =>['required','string','max:255'] ,
      "user_id" =>['required']
        ])->validate();


        $update_id  =  new Candidature();
        $update_id->nom  = $request->input('nom');
        $update_id->prenom  = $request->input('prenom');
        $update_id->date_de_naissance  = $request->input('date_de_naissance');
        $update_id->lieu_de_naissance  = $request->input('lieu_de_naissance');
        $update_id->sexe  = $request->input('sexe');
        $update_id->statut  = $request->input('statut');
        $update_id->nationnalite  = $request->input('nationnalite');
        $update_id->telephone_1  = $request->input('telephone_1');
        $update_id->examen   = $request->input('examen');
         $update_id->filiere  = $request->input('filiere');
         $update_id->ecole_d_origine  = $request->input('ecole_d_origine');
         $update_id->matricule  = $request->input('matricule');
         $update_id->serie_du_bac  = $request->input('serie_du_bac');
         $update_id->mention  = $request->input('mention');
         $update_id->points_au_bac  = $request->input('points_au_bac');
         $update_id->numero_de_table  = $request->input('numero_de_table');
         $update_id->ville  = $request->input('ville');
         $update_id->centre_de_composition  = $request->input('centre_de_composition');
         $update_id->email  = $request->input('email');
         $update_id->user_id  = Auth::user()->id;

         if($request->hasfile('photo')) {

            $file = $request->file('photo');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/candidature/' , $filename);
            $update_id->photo  = $filename;
         }
         $update_id->save();

         $msg= 'Candidature enregistrée avec success';

       Alert::success('success', $msg);
        return redirect()->route('ajout_candidature');


    }





    public function detail($id_candidature){

        $Candidature = Candidature::where('id',$id_candidature)->get();

        $msg= 'Candidature modifiée  avec success';
        Alert::success('other', $msg);
        return view('dashboarduser.candidature.details',[
            'candidature'=>$Candidature
        ]);

    }




    public function delete($id_candidature){
        $candidature = Candidature::find($id_candidature);
        $destination = 'uploads/candidature/' . $candidature->photo ;
        if(File::exists($destination )) {
            File::delete($destination);
        }
        $candidature->delete();
        return redirect()->route('liste_candidature')->with('delete','Candidature suprimer !');
    }


    public function edit($id_candidature){

        $candidat = Candidature::where('id',$id_candidature)->first();

        return view('dashboarduser.candidature.edit', compact('candidat'));

    }



    public function update(Request $request, $id){

        $update_id =  Candidature::find($id);

        Validator::make($request->input(),[
      "nom" =>['required','string','max:255'] ,
      "prenom" =>['required','string','max:255'] ,
      "date_de_naissance" =>['required','string','max:255'] ,
      "lieu_de_naissance" =>['required','string','max:255'] ,
      "sexe" =>['required','string','max:255'] ,
      "statut" =>['required','string','max:255'] ,
      "nationnalite" =>['required','string','max:255'] ,
      "telephone_1" =>['required'] ,
      "examen" =>['required','string','max:255'] ,
      "filiere" =>['required','string','max:255'] ,
      "ecole_d_origine" =>['required','string','max:255'] ,
      "matricule" =>['required','string','max:255'] ,
      "serie_du_bac" =>['required','string','max:255'] ,
      "mention" =>['required','string','max:255'] ,
      "points_au_bac" =>['required'] ,
      "numero_de_table" =>['required','string','max:255'] ,
      "ville" =>['required','string','max:255'] ,
      "centre_de_composition" =>['required','string','max:255'] ,
      "email" =>['required','string','max:255'] ,
      "user_id" =>['required']
        ])->validate();



        $update_id->nom  = $request->input('nom');
        $update_id->prenom  = $request->input('prenom');
        $update_id->date_de_naissance  = $request->input('date_de_naissance');
        $update_id->lieu_de_naissance  = $request->input('lieu_de_naissance');
        $update_id->sexe  = $request->input('sexe');
        $update_id->statut  = $request->input('statut');
        $update_id->nationnalite  = $request->input('nationnalite');
        $update_id->telephone_1  = $request->input('telephone_1');
        $update_id->examen   = $request->input('examen');
         $update_id->filiere  = $request->input('filiere');
         $update_id->ecole_d_origine  = $request->input('ecole_d_origine');
         $update_id->matricule  = $request->input('matricule');
         $update_id->serie_du_bac  = $request->input('serie_du_bac');
         $update_id->mention  = $request->input('mention');
         $update_id->points_au_bac  = $request->input('points_au_bac');
         $update_id->numero_de_table  = $request->input('numero_de_table');
         $update_id->ville  = $request->input('ville');
         $update_id->centre_de_composition  = $request->input('centre_de_composition');
         $update_id->email  = $request->input('email');
         $update_id->user_id  = Auth::id();


         if($request->hasfile('photo')) {

            $chemin = 'uploads/candidature/'.$update_id->photo;
            if(File::exists($chemin)) {

                File::delete($chemin) ;
            }

            $file = $request->file('photo');
            $extention  = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/candidature/' , $filename);
            $update_id->photo  = $filename;

         }
         $update_id->update()  ;


        return redirect()->route('detail_candidature', $update_id->id)->with('danger', 'candidature modifié avec success');


    }


    public function export_excel() {
        return Excel::download(new CandidatureExport, 'candidatures.xlsx');

    }


    public function rejet()  {

        $candidat_rejet  =  Candidature::where('user_id',  Auth::user()->id)->where('etat', 'rejet')->paginate(10);
        return view('dashboarduser.candidature.candidaturerejet', compact('candidat_rejet'));
    }


    public function confirm()  {

        $candidat_valide  =  Candidature::where('user_id',  Auth::user()->id)->where('etat', 'valide')->paginate(10);


        return view('dashboarduser.candidature.candidaturevalide', compact('candidat_valide'));
    }



    public function progress () {
        $candidat_encours  =  Candidature::where('user_id',  Auth::user()->id)->where('etat', 'encours')->paginate(10);
            return view('dashboarduser.candidature.candidatureencours', compact('candidat_encours'));
    }





}
