<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Etablissement;
use App\Models\Administrateur;
use App\Models\Classe;
class Sadmi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = DB::table('administrateurs')->find($id);
        return view('super_admi.index',compact('user'));
    }

    public function liste_etablissements($id){
        $user = DB::table('administrateurs')->find($id);
        $etablissement = Etablissement::all();

        return view('super_admi.liste_etablissement',compact('user','etablissement'));
    }

    public function new_etablissements($id){

        $user = DB::table('administrateurs')->find($id);

        return view('super_admi.new_etablissement',compact('user'));

    }

    public function store_etablissement(Request $request,$id){

        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'contact' => 'required',
            'pays' => 'required',
            'ville' => 'required',
            'quartier' => 'required'
        ]);

        $etablissement = new Etablissement();

        $etablissement->nom = $request->input('nom');
        $etablissement->Description = $request->input('description');
        $etablissement->infoline = $request->input('contact');
        $etablissement->pays = $request->input('pays');
        $etablissement->ville = $request->input('ville');
        $etablissement->quartier = $request->input('quartier');
        $etablissement->nombre_etudiant = 0;
        $etablissement->nombre_classe = 0;
        $etablissement->image = 'fierte';
        $etablissement->save();



        return redirect()->route('liste_etablissement',$id)
                        ->with('succes','Nouvel établissement crée !!');


    }
    public function liste_administrateurs($id){
        $user = DB::table('administrateurs')->find($id);
        $administrateur = DB::table('administrateurs')->where('type_user',2)->get();

        return view('super_admi.liste_administrateur',compact('user','administrateur'));

    }
    public function new_administrateur($id){
        $user = DB::table('administrateurs')->find($id);
        $etablissement = DB::table('etablissements')->get();

     return view('super_admi.new_administrateur',compact('user','etablissement'));

    }

    public function store_administrateur(Request $request,$id){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'login' => 'required',
            'password' => 'required',
            'idE' => 'required'

        ]);


        $administrateur = new Administrateur();

        $administrateur ->nom = $request ->input('nom');
        $administrateur ->prenom = $request ->input('prenom');
        $administrateur ->date_de_naissance = $request ->input('date_de_naissance');
        $administrateur ->tel = $request ->input('tel');
        $administrateur ->email = $request ->input('email');
        $administrateur ->login = $request ->input('login');
        $administrateur ->password = $request ->input('password');
        $administrateur ->photo = 'fierte';
        $administrateur ->type_user = 2;
        $administrateur ->idE = $request ->input('idE');
        $administrateur ->save();




        return redirect()->route('liste_administrateurs',$id)
                        ->with('succes','Nouvel administrateur crée !!');
        }

        public function liste_classes($id){
            $user = DB::table('administrateurs')->find($id);
            $classe = DB::table('classes')->get();

            return view('super_admi.liste_classes',compact('user','classe'));
        }
        public function new_classe($id){

            $user = DB::table('administrateurs')->find($id);

            return view('super_admi.new_classe',compact('user'));

        }
        public function store_classe(Request $request,$id){

            $request->validate([
                'nom' => 'required',
                'description' => 'required',

            ]);

            $classe = new  Classe();

            $classe->nom = $request->input('nom');
            $classe->Description = $request->input('description');
            $classe->nombre_etudiant = 0;
            $classe->image = 'fierte';
            $classe->save();

            return redirect()->route('liste_classes',$id)
                        ->with('succes','Nouvelle classe créee !!');
        }


}
