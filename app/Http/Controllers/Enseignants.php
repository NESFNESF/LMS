<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Consigne;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Enseignant;
use App\Models\Evaluation;
use App\Models\Indicateur;
use App\Models\Lecon;
use App\Models\Matiere;
use App\Models\MatiereLecon;
use App\Models\Objectif;
use App\Models\QCM;
use App\Models\Situation;
use App\Models\Trace;
use App\Models\User;
use App\Models\VraiFaux;
use Illuminate\Validation\Rules\Exists;

class Enseignants extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = DB::table('enseignants')->find($id);
        return view('enseignant.index',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function classe_eleve($id,$id_c){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $etudiants = $classe->Etudiants()->get();

        return view('enseignant.liste_classe_eleve',compact('user','etudiants','classe'));

    }
    public function classe ($id)
    {

        $user = Enseignant::find($id);

        $classe = $user->Classes()->get();
        return view('enseignant.liste_classe',compact('user','classe'));
    }

    public function classe_matiere($id,$id_c){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matieres = $classe->Matieres()->get();

        return view('enseignant.liste_classe_matiere',compact('user','matieres','classe'));

    }
    public function classe_matiere_lecons($id , $id_c , $id_m){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecons = $matiere->Lecons()->get();

        return view('enseignant.liste_classe_matiere_lecon',compact('user','matiere','classe','lecons'));

    }

    public function classe_matiere_lecons_objectifs($id , $id_c , $id_m,$id_l){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $objectifs = explode('$',DB::table('objectifs')->where('idL' , $id_l)->get()[0]->description);

        return view('enseignant.objectif',compact('user','matiere','classe','lecon','objectifs'));

    }
    public function classe_matiere_lecons_indicateur($id , $id_c , $id_m,$id_l){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $indicateurs = explode('$',DB::table('indicateurs')->where('idL' , $id_l)->value('description'));

        return view('enseignant.indicateur',compact('user','matiere','classe','lecon','indicateurs'));

    }
    public function classe_matiere_lecons_situation($id , $id_c , $id_m,$id_l){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $situations = explode('$',DB::table('situations')->where('idL' , $id_l)->get()[0]->description);

        return view('enseignant.situation',compact('user','matiere','classe','lecon','situations'));

    }
    public function classe_matiere_lecons_consigne($id , $id_c , $id_m,$id_l){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $consignes = DB::table('consignes')->where('idL' , $id_l)->get();

        return view('enseignant.consigne',compact('user','matiere','classe','lecon','consignes'));

    }
    public function classe_matiere_lecons_trace($id , $id_c , $id_m,$id_l){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $trace = DB::table('traces')->where('idL' , $id_l)->get();
        $trace = $trace[0];

        return view('enseignant.trace',compact('user','matiere','classe','lecon','trace'));

    }
    public function classe_matiere_lecons_evaluation($id , $id_c , $id_m,$id_l){
        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);

        $evaluations = DB::table('evaluations')->where('idL' , $id_l)->get();

        $qcms = DB::table('q_c_m_s')->where('idEv' , $evaluations[0]->id)->get();
        $vfs = DB::table('vrai_fauxes')->where('idEv' , $evaluations[0]->id)->get();

        return view('enseignant.evaluation',compact('user','matiere','classe','lecon','qcms','vfs'));

    }
    public function classe_matiere_ajoutlecons($id , $id_c , $id_m){

        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);



        return view('enseignant.ajout_lecon',compact('user','matiere','classe'));

    }
    public function classe_matiere_modifierlecons($id , $id_c , $id_m,$id_l){

        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecon = Lecon::find($id_l);


        return view('enseignant.modifier_lecon',compact('user','matiere','classe','lecon'));

    }
    public function classe_matiere_storelecons(Request $request,$id , $id_c , $id_m){

        //SAUVEGARDE DANS LA TABLE LECON

        $lecon = new Lecon();
        $lecon->titre = $request->input('titre');
        $lecon->save();

        //SAUVEGARDE DU LIEN LECON_MATIERE

        $matiere_lecon = new MatiereLecon();
        $id_l = DB::table('lecons')->where('titre',$request->input('titre') )->value('id');
        $matiere_lecon->idM = $id_m;
        $matiere_lecon->idL = $id_l;
        $matiere_lecon->save();

        //SAUVEGARDE DE L'OBJECTIF DE LA LECON

        $objectif = new Objectif();
        $objectif->idL = $id_l;
        $objectif->description = $request->input('objectif');

        $objectif->save();

        $indicateur = new Indicateur();
        $indicateur->idL = $id_l;
        $indicateur->description = $request->input('indicateur');

        $indicateur->save();

        $situation = new Situation();
        $situation->idL = $id_l;
        $situation->description = $request->input('situation');

        $situation->save();


        for($i=1;$i <= $request->input('compteurC');$i++){

            $consigne = new Consigne();
            $consigne->idL = $id_l;

            $qcm1 = $request->input('reponsec1'.$i);
            $qcm2 = $request->input('reponsec2'.$i);
            $qcm3 = $request->input('reponsec3'.$i);
            $choix1 = $request->input('choix1'.$i);
            $choix2 = $request->input('choix2'.$i);

            if(isset($choix1)==true){
                $consigne->reponse = $qcm1;
            }elseif(isset($choix2)==true){
                $consigne->reponse = $qcm2;
            }else{
                $consigne->reponse = $qcm3;
            }
            $consigne->qcm1 = $qcm1;
            $consigne->qcm2 = $qcm2;
            $consigne->qcm3 = $qcm3;
            $consigne->question = $request->input('consigne'.$i);

            $consigne->save();

        }

        $trace = new Trace();
        $trace->idL = $id_l;
        $trace->titre = $request->input('trace');
        //$a = $request->file(['key' => 'file']);
        $a = $request->file('file');
        $lien = uniqid().'-'.$a->getClientOriginalName();
        $a->move( public_path().'/Cours/',$lien);
        $trace->lien = $lien;

        $trace->save();

        $evaluation = new Evaluation();
        $evaluation->idL = $id_l;
        $evaluation->description = 'EVALUATION'.$id_l;

        $evaluation->save();

        $id_ev = DB::table('evaluations')->where('description','EVALUATION'.$id_l)->value('id');

        for($i=1;$i <= $request->input('compteurqcm');$i++){

            $qcm = new QCM();
            $qcm->idEv = $id_ev;

            $qcm1 = $request->input('reponsee1'.$i);
            $qcm2 = $request->input('reponsee2'.$i);
            $qcm3 = $request->input('reponsee3'.$i);
            $choix1 = $request->input('qcm1'.$i);
            $choix2 = $request->input('qcm2'.$i);

            if(isset($choix1)==true){
                $qcm->reponse = $qcm1;
            }elseif(isset($choix2)==true){
                $qcm->reponse = $qcm2;
            }else{
                $qcm->reponse = $qcm3;
            }
            $qcm->qcm1 = $qcm1;
            $qcm->qcm2 = $qcm2;
            $qcm->qcm3 = $qcm3;
            $qcm->question = $request->input('evaluation'.$i);

            $qcm->save();
        }

        for($i=1;$i <= $request->input('compteur');$i++){

            $vf = new VraiFaux();
            $vf->question=$request->input('prequis'.$i);
            $vf->reponse = $request->input('reponse'.$i);
            $vf->idEv = $id_ev;

            $vf->save();
        }


        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecons = $matiere->Lecons()->get();

        return view('enseignant.liste_classe_matiere_lecon',compact('user','matiere','classe','lecons'));


    }




    public function classe_matiere_storemodifierlecons(Request $request,$id , $id_c , $id_m, $id_l){


        DB::table('matiere_lecons')->where('idL', $id_l)->delete();

        //SAUVEGARDE DANS LA TABLE LECON



        $lecon = new Lecon();
        $lecon->titre = $request->input('titre');
        $lecon->save();

        //SAUVEGARDE DU LIEN LECON_MATIERE

        $matiere_lecon = new MatiereLecon();
        $id_l = DB::table('lecons')->where('titre',$request->input('titre') )->value('id');
        $matiere_lecon->idM = $id_m;
        $matiere_lecon->idL = $id_l;
        $matiere_lecon->save();

        //SAUVEGARDE DE L'OBJECTIF DE LA LECON

        $objectif = new Objectif();
        $objectif->idL = $id_l;
        $objectif->description = $request->input('objectif');

        $objectif->save();

        $indicateur = new Indicateur();
        $indicateur->idL = $id_l;
        $indicateur->description = $request->input('indicateur');

        $indicateur->save();

        $situation = new Situation();
        $situation->idL = $id_l;
        $situation->description = $request->input('situation');

        $situation->save();


        for($i=1;$i <= $request->input('compteurC');$i++){

            $consigne = new Consigne();
            $consigne->idL = $id_l;

            $qcm1 = $request->input('reponsec1'.$i);
            $qcm2 = $request->input('reponsec2'.$i);
            $qcm3 = $request->input('reponsec3'.$i);
            $choix1 = $request->input('choix1'.$i);
            $choix2 = $request->input('choix2'.$i);

            if(isset($choix1)==true){
                $consigne->reponse = $qcm1;
            }elseif(isset($choix2)==true){
                $consigne->reponse = $qcm2;
            }else{
                $consigne->reponse = $qcm3;
            }
            $consigne->qcm1 = $qcm1;
            $consigne->qcm2 = $qcm2;
            $consigne->qcm3 = $qcm3;
            $consigne->question = $request->input('consigne'.$i);

            $consigne->save();

        }

        $trace = new Trace();
        $trace->idL = $id_l;
        $trace->titre = $request->input('trace');
        //$a = $request->file(['key' => 'file']);
        $a = $request->file('file');
        $lien = uniqid().'-'.$a->getClientOriginalName();
        $a->move( public_path().'/Cours/',$lien);
        $trace->lien = $lien;

        $trace->save();

        $evaluation = new Evaluation();
        $evaluation->idL = $id_l;
        $evaluation->description = 'EVALUATION'.$id_l;

        $evaluation->save();

        $id_ev = DB::table('evaluations')->where('description','EVALUATION'.$id_l)->value('id');

        for($i=1;$i <= $request->input('compteurqcm');$i++){

            $qcm = new QCM();
            $qcm->idEv = $id_ev;

            $qcm1 = $request->input('reponsee1'.$i);
            $qcm2 = $request->input('reponsee2'.$i);
            $qcm3 = $request->input('reponsee3'.$i);
            $choix1 = $request->input('qcm1'.$i);
            $choix2 = $request->input('qcm2'.$i);

            if(isset($choix1)==true){
                $qcm->reponse = $qcm1;
            }elseif(isset($choix2)==true){
                $qcm->reponse = $qcm2;
            }else{
                $qcm->reponse = $qcm3;
            }
            $qcm->qcm1 = $qcm1;
            $qcm->qcm2 = $qcm2;
            $qcm->qcm3 = $qcm3;
            $qcm->question = $request->input('evaluation'.$i);

            $qcm->save();
        }

        for($i=1;$i <= $request->input('compteur');$i++){

            $vf = new VraiFaux();
            $vf->question=$request->input('prequis'.$i);
            $vf->reponse = $request->input('reponse'.$i);
            $vf->idEv = $id_ev;

            $vf->save();
        }


        $user = Enseignant::find($id);
        $classe=Classe::find($id_c);
        $matiere = Matiere::find($id_m);
        $lecons = $matiere->Lecons()->get();

        return view('enseignant.liste_classe_matiere_lecon',compact('user','matiere','classe','lecons'));


    }
}
