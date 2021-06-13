<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Administrateur;
use App\Models\Etablissement;

class plateForme extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

    public function store_super_administrateur(Request $request){

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_de_naissance' => 'required',
            'tel' => 'required',
            'email' => 'required',
            'login' => 'required',
            'password' => 'required',


        ]);


        $etablissement = new Etablissement();


        $etablissement->nom = "LEARNMATE";
        $etablissement->Description = "Ce ci correspond à la plateforme elle même";
        $etablissement->infoline = "null";
        $etablissement->pays = "Cameroun";
        $etablissement->ville = "Yaoundé";
        $etablissement->quartier = "Aucun";
        $etablissement->nombre_etudiant = 0;
        $etablissement->nombre_classe = 0;
        $etablissement->image = 'fierte';
        $etablissement->save();

        $id = DB::table('etablissements')->where('nom' , "LEARNMATE")->value('id');


        $administrateur = new Administrateur();

        $administrateur ->nom = $request ->input('nom');
        $administrateur ->prenom = $request ->input('prenom');
        $administrateur ->date_de_naissance = $request ->input('date_de_naissance');
        $administrateur ->tel = $request ->input('tel');
        $administrateur ->email = $request ->input('email');
        $administrateur ->login = $request ->input('login');
        $administrateur ->password = $request ->input('password');
        $administrateur ->photo = 'fierte';
        $administrateur ->type_user = 1;
        $administrateur ->idE = $id;
        $administrateur ->save();




        return redirect()->route('login')
                        ->with('succes','Nouvel administrateur crée !!');
        }


    public function login(Request $request){

       $data = $request->validate([
            'login' => 'required',
            'password' => 'required'
        ]);





        $users = DB::table('etudiants')->where('login',$data['login'])
                                            ->where('password',$data['password'])->get();
        if (count($users)==0){
            $users = DB::table('enseignants')->where('login',$data['login'])
            ->where('password',$data['password'])->get();
            if(count($users)==0){
                $users = DB::table('administrateurs')->where('login',$data['login'])
                ->where('password',$data['password'])->get();
                if(count($users)==0){
                    return redirect()->route('login');
                }else{
                    $type = $users[0]->type_user;
                    $id = $users[0]->id;
                    if($type == 2){

                    return redirect()->route('liste_classes',$id);
                    }else{

                    return redirect()->route('liste_etablissement',$id);
                    }

                }
            }else{
                $id = $users[0]->id;
                return redirect()->route('liste_classe_enseignant',$id);
            }
        }else{
            $id = $users[0]->id;
            return redirect()->route('etudiant',$id);
        }




    return null;
    }

}
