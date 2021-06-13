<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;




use App\Models\Classe;
use App\Models\Etudiant as ModelsEtudiant;
use App\Models\Lecon;
use App\Models\LeconEtudiant;
use App\Models\Matiere;


class Etudiant extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {






        $user = DB::table('etudiants')->find($id);

        $id_c = DB::table('classe_etudiants')->where('idEd', $id)->value('idC');
        return $this->classe_matiere($id,$id_c);
    }



    public function classe_matiere($id,$id_c){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matieres = $classe->Matieres()->get();

        return view('etudiant.liste_classe_matiere',compact('user','matieres','classe'));

    }
    public function classe_matiere_lecons($id , $id_c , $id_m){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecons = $matiere->Lecons()->get();

        return view('etudiant.liste_classe_matiere_lecon',compact('user','matiere','classe','lecons'));

    }

    public function classe_matiere_lecons_objectifs($id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $objectifs = explode('$',DB::table('objectifs')->where('idL' , $id_l)->get()[0]->description);

        return view('etudiant.objectif',compact('user','matiere','classe','lecon','objectifs'));

    }
    public function classe_matiere_lecons_indicateur($id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $indicateurs = explode('$',DB::table('indicateurs')->where('idL' , $id_l)->get()[0]->description);

        return view('etudiant.indicateur',compact('user','matiere','classe','lecon','indicateurs'));

    }
    public function classe_matiere_lecons_situation($id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $situations = explode('$',DB::table('situations')->where('idL' , $id_l)->get()[0]->description);

        return view('etudiant.situation',compact('user','matiere','classe','lecon','situations'));

    }
    public function classe_matiere_lecons_consigne($id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $consignes = DB::table('consignes')->where('idL' , $id_l)->get();

        return view('etudiant.consigne',compact('user','matiere','classe','lecon','consignes'));

    }

    public function classe_matiere_lecons_consigne_resultat(Request $request,$id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $consignes = DB::table('consignes')->where('idL' , $id_l)->get();

        return view('etudiant.consigne_resultat',compact('user','matiere','classe','lecon','consignes','request'));

    }
    public function classe_matiere_lecons_trace($id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $trace = DB::table('traces')->where('idL' , $id_l)->get();
        $trace = $trace[0];

        return view('etudiant.trace',compact('user','matiere','classe','lecon','trace'));

    }
    public function classe_matiere_lecons_evaluation($id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $evaluations = DB::table('evaluations')->where('idL' , $id_l)->get();

        $qcms = DB::table('q_c_m_s')->where('idEv' , $evaluations[0]->id)->get();
        $vfs = DB::table('vrai_fauxes')->where('idEv' , $evaluations[0]->id)->get();

        return view('etudiant.evaluation',compact('user','matiere','classe','lecon','qcms','vfs'));

    }

    public function classe_matiere_lecons_evaluation_resultat(Request $request,$id , $id_c , $id_m,$id_l){
        $user = ModelsEtudiant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $evaluations = DB::table('evaluations')->where('idL' , $id_l)->get();

        $qcms = DB::table('q_c_m_s')->where('idEv' , $evaluations[0]->id)->get();
        $vfs = DB::table('vrai_fauxes')->where('idEv' , $evaluations[0]->id)->get();

        return view('etudiant.evaluation_resultat',compact('user','matiere','classe','lecon','qcms','vfs','request'));

    }

    public function classe_matiere_lecons_evaluation_success($id , $id_c , $id_m,$id_l,$note){




        $EL = new LeconEtudiant();

        $EL->idEd = $id;
        $EL->idL = $id_l;
        $EL->evolution = $note;
        $EL->save();


        return $this->classe_matiere_lecons($id , $id_c, $id_m);



    }





}
