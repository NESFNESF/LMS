<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Classe;
use App\Models\ClasseEnseignant;
use App\Models\ClasseEtudiant;
use App\Models\ClasseMatiere;
Use App\Models\Enseignant;
use App\Models\Etablissement;
use App\Models\EtablissementClasse;
use App\Models\EtablissementEnseignant;
use App\Models\EtablissementEtudiant;
use App\Models\EtablissementMatiere;
Use App\Models\Matiere;
Use App\Models\Etudiant;
use App\Models\MatiereEnseignant;
use Symfony\Component\Console\Input\Input;

class Admi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = DB::table('administrateurs')->find($id);
        return view('admi.index',compact('user'));
    }
    public function liste_classes($id)
    {
        $user = DB::table('administrateurs')->find($id);

        $etab =

        $classe = Etablissement::find($user->idE)->Classes()->get();



        return view('admi.liste_classes',compact('user','classe'));
    }
    public function new_classe($id)
    {

        $user = DB::table('administrateurs')->find($id);
        $matieres =  Etablissement::find($user->idE)->Matieres()->get();

        return view('admi.new_classe',compact('user','matieres'));

    }
    public function store_classe(Request $request,$id)
    {

        $request->validate([
            'nom' => 'required',
            'description' => 'required',

        ]);

        $classe = new  Classe();

        $classe->nom = $request->input('nom');
        $classe->Description = $request->input('description');
        $classe->nombre_etudiant = 0;
        $classe->nombre_classe = 0;

        $classe->save();

            $idC = DB::table('classes')->where('nom',$request->input('nom'))
                                            ->where('description',$request->input('description'))->value('id');
            $user = DB::table('administrateurs')->find($id);
            $E_C = new EtablissementClasse();
            $E_C->idC = $idC;
            $E_C->idE = $user->idE;
            $E_C->save();


            $classes = Etablissement::find($user->idE)->Matieres()->get();

            foreach ($classes as $class) {
                $t = 'matiere'.$class->id;
                $choix = $request->input($t);
                if($choix!=''){
                    $class_ens = new ClasseMatiere();
                    $class_ens ->idM = $class->id;
                    $class_ens ->idC = $idC;
                    $class_ens ->save();
                }

            }


        return redirect()->route('liste_classes',$id)
                    ->with('succes','Nouvelle classe créee !!');
    }
    public function liste_enseignants($id){
        $user = DB::table('administrateurs')->find($id);
        $enseignant = Etablissement::find($user->idE)->Enseignants()->get();



         return view('admi.liste_enseignants',compact('user','enseignant'));

    }
    public function new_enseignant($id){
        $user = DB::table('administrateurs')->find($id);
        $classes = Etablissement::find($user->idE)->Classes()->get();$classes = Etablissement::find($user->idE)->Classes()->get();
        $matieres = Etablissement::find($user->idE)->Matieres()->get();


    return view('admi.new_enseignant',compact('user','classes','matieres'));

    }

    public function store_enseignant(Request $request,$id){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'login' => 'required',
            'password' => 'required',


        ]);


        $enseignant = new Enseignant();

        $enseignant ->nom = $request ->input('nom');
        $enseignant ->prenom = $request ->input('prenom');
        $enseignant ->date_de_naissance = $request ->input('date_de_naissance');
        $enseignant ->tel = $request ->input('tel');
        $enseignant ->email = $request ->input('email');
        $enseignant ->login = $request ->input('login');
        $enseignant ->password = $request ->input('password');
        $enseignant ->photo = 'fierte';


        $enseignant ->save();


        $idC = DB::table('enseignants')->where('password',$request->input('password'))
        ->where('login',$request->input('login'))->value('id');
$user = DB::table('administrateurs')->find($id);
$E_C = new EtablissementEnseignant();
$E_C->idEn = $idC;
$E_C->idE = $user->idE;
$E_C->save();

        $ens = DB::table('enseignants')->where('login',$enseignant->login)
                                    ->where('password',$enseignant->password)->value('id');

        $classes = DB::table('classes')->get();
        $matieres = DB::table('matieres')->get();

        foreach ($classes as $class) {
            $t = 'classe'.$class->id;
            $choix = $request->input($t);
            if($choix!=''){
                $class_ens = new ClasseEnseignant();
                $class_ens ->idEn = $ens;
                $class_ens ->idC = $class->id;
                $class_ens ->save();
            }

        }

        foreach ($matieres as $class) {
            $t = 'matiere'.$class->id;
            $choix = $request->input($t);
            if($choix!=''){
                $class_ens = new MatiereEnseignant();
                $class_ens ->idEn = $ens;
                $class_ens ->idM = $class->id;
                $class_ens ->save();
            }

        }


        return redirect()->route('liste_enseignants',$id)
                      ->with('succes','Nouvel enseignant crée !!');
    }

    public function liste_matieres($id)
    {
        $user = DB::table('administrateurs')->find($id);
        $matiere =  Etablissement::find($user->idE)->Matieres()->get();

        return view('admi.liste_matieres',compact('user','matiere'));
    }
    public function new_matiere($id)
    {

        $user = DB::table('administrateurs')->find($id);

        return view('admi.new_matiere',compact('user'));

    }
    public function store_matiere(Request $request,$id)
    {

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'coefficient'=> 'required',

        ]);

        $matiere = new  Matiere();

        $matiere->nom = $request->input('nom');
        $matiere->Description = $request->input('description');
        $matiere->coef = $request->input('coefficient');

        $matiere->save();

        $idM = DB::table('matieres')->where('nom',$request->input('nom'))
        ->where('description',$request->input('description'))->value('id');
$user = DB::table('administrateurs')->find($id);
$E_M = new EtablissementMatiere();
$E_M->idM = $idM;
$E_M->idE = $user->idE;
$E_M->save();




        return redirect()->route('liste_matieres',$id)
                    ->with('succes','Nouvelle matiere créee !!');
    }

    public function liste_etudiants($id){
        $user = DB::table('administrateurs')->find($id);
        $etudiant =Etablissement::find($user->idE)->Etudiants()->get();

        return view('admi.liste_etudiants',compact('user','etudiant'));

    }
    public function new_etudiant($id){
        $user = DB::table('administrateurs')->find($id);
        $classe = Etablissement::find($user->idE)->Classes()->get();

     return view('admi.new_etudiant',compact('user','classe'));

    }

    public function store_etudiant(Request $request,$id){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'login' => 'required',
            'password' => 'required',


        ]);


        $etudiant = new Etudiant();

        $etudiant ->nom = $request ->input('nom');
        $etudiant ->prenom = $request ->input('prenom');
        $etudiant ->date_de_naissance = $request ->input('date_de_naissance');
        $etudiant ->tel = $request ->input('tel');
        $etudiant ->email = $request ->input('email');
        $etudiant ->login = $request ->input('login');
        $etudiant ->password = $request ->input('password');
        $etudiant ->photo = 'fierte';


        $etudiant->save();

        $idC = DB::table('etudiants')->where('password',$request->input('password'))
        ->where('login',$request->input('login'))->value('id');
$user = DB::table('administrateurs')->find($id);
$E_C = new EtablissementEtudiant();
$E_C->idEd = $idC;
$E_C->idE = $user->idE;
$E_C->save();



$user = DB::table('administrateurs')->find($id);
$E_C = new ClasseEtudiant();
$E_C->idEd = $idC;
$E_C->idC = $request->input('idC');
$E_C->save();






        return redirect()->route('liste_etudiants',$id)
                        ->with('succes','Nouvel etudiant ajouté !!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( )
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
}
