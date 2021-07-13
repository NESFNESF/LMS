<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* ROUTE SUR SITE*/
Route::get('/', function () {
    return view('LMS.index');
})->name('accueil');

Route::get('/login', function () {
    return view('LMS.login');
})->name('login');


Route::get('/nesf', function () {
    return view('LMS.nesf');
})->name('nesf');
Route::post('/enregistrement_administrateur',[App\Http\Controllers\plateForme::class,'store_super_administrateur'])->name('store_super_administrateur');


Route::post('store',[App\Http\Controllers\plateForme::class,'login'])->name('store');


/*ROUTE DU MODULE SUPER ADMINISTRATEUR*/
Route::post('/sadmi/index',function (){
    return view('super_admi.index');
})->name('tb_sadmi');
Route::get('/sadmi/{id}',[App\Http\Controllers\Sadmi::class,'index'])->name('sadmi');
Route::get('/sadmi/{id}/etablissements',[App\Http\Controllers\Sadmi::class,'liste_etablissements'])->name('liste_etablissement');
Route::get('/sadmi/{id}/nouveau_etablissement',[App\Http\Controllers\Sadmi::class,'new_etablissements'])->name('new_etablissement');
Route::post('/sadmi/{id}/enregistrement_etablissement',[App\Http\Controllers\Sadmi::class,'store_etablissement'])->name('store_etablissement');
Route::get('/sadmi/{id}/administrateurs',[App\Http\Controllers\Sadmi::class,'liste_administrateurs'])->name('liste_administrateurs');
Route::get('/sadmi/{id}/nouvel_administrateur',[App\Http\Controllers\Sadmi::class,'new_administrateur'])->name('new_administrateur');
Route::post('/sadmi/{id}/enregistrement_administrateur',[App\Http\Controllers\Sadmi::class,'store_administrateur'])->name('store_administrateur');



/*ROUTE DU MODULE ADMINISTRATEUR*/
Route::post('/admi/index',function (){
    return view('admi.index');
})->name('tb_admi');
Route::get('/admi/{id}',[App\Http\Controllers\Admi::class,'index'])->name('admi');
Route::get('admi/{id}/classes',[App\Http\Controllers\Admi::class,'liste_classes'])->name('liste_classes');
Route::get('admi/{id}/nouvelle_classe',[App\Http\Controllers\Admi::class,'new_classe'])->name('new_classe');
Route::post('admi/{id}/enregistrement_classe',[App\Http\Controllers\Admi::class,'store_classe'])->name('store_classe');
Route::get('/admi/{id}/enseignants',[App\Http\Controllers\Admi::class,'liste_enseignants'])->name('liste_enseignants');
Route::get('/admi/{id}/nouvel_enseignant',[App\Http\Controllers\Admi::class,'new_enseignant'])->name('new_enseignant');
Route::post('/admi/{id}/enregistrement_enseignant',[App\Http\Controllers\Admi::class,'store_enseignant'])->name('store_enseignant');
Route::get('/admi/{id}/matieres',[App\Http\Controllers\Admi::class,'liste_matieres'])->name('liste_matieres');
Route::get('/admi/{id}/nouvelle_matiere',[App\Http\Controllers\Admi::class,'new_matiere'])->name('new_matiere');
Route::post('/admi/{id}/enregistrement_matiere',[App\Http\Controllers\Admi::class,'store_matiere'])->name('store_matiere');
Route::get('/admi/{id}/etudiants',[App\Http\Controllers\Admi::class,'liste_etudiants'])->name('liste_etudiants');
Route::get('/admi/{id}/nouvel_etudiant',[App\Http\Controllers\Admi::class,'new_etudiant'])->name('new_etudiant');
Route::post('/admi/{id}/enregistrement_etudiant',[App\Http\Controllers\Admi::class,'store_etudiant'])->name('store_etudiant');



/*ROUTE DU MODULE ENSEIGNANT*/
Route::post('/enseignant/index',function (){
    return view('.index');
})->name('tb_enseignant');
Route::get('/enseignant/{id}',[App\Http\Controllers\Enseignants::class,'index'])->name('enseignant');
Route::get('/enseignant/{id}/classe',[App\Http\Controllers\Enseignants::class,'classe'])->name('liste_classe_enseignant');
Route::get('/enseignant/{id}/classe/{id_c}',[App\Http\Controllers\Enseignants::class,'classe_matiere'])->name('liste_classe_matiere_enseignant');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons'])->name('liste_classe_matiere_lecon_enseignant');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/nouvelle_leçon',[App\Http\Controllers\Enseignants::class,'classe_matiere_ajoutlecons'])->name('liste_classe_matiere_ajoutlecon_enseignant');
Route::post('/enseignant/{id}/classe/{id_c}/matière/{id_m}/store_leçon',[App\Http\Controllers\Enseignants::class,'classe_matiere_storelecons'])->name('store_lecon');
Route::post('/enseignant/{id}/classe/{id_c}/matière/{id_m}/store_leçon/{id_l}',[App\Http\Controllers\Enseignants::class,'classe_matiere_storemodifierlecons'])->name('store_modifier_lecon');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/objectifs_eval',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_objectifs_eval'])->name('liste_classe_matiere_lecon_eval');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/objectifs',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_objectifs'])->name('liste_classe_matiere_lecon');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/indicateur_de compétences',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_indicateur'])->name('liste_classe_matiere_lecon_indicateur');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/situation_problème',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_situation'])->name('liste_classe_matiere_lecon_situation');

Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/prerequiq',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_prerequiq'])->name('liste_classe_matiere_lecon_prerequiq');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/consigne',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_consigne'])->name('liste_classe_matiere_lecon_consigne');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/trace',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_trace'])->name('liste_classe_matiere_lecon_trace');
Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/evaluation',[App\Http\Controllers\Enseignants::class,'classe_matiere_lecons_evaluation'])->name('liste_classe_matiere_lecon_evaluation');

Route::get('/enseignant/{id}/classe/{id_c}/matière/{id_m}/modifier_leçon/{id_l}',[App\Http\Controllers\Enseignants::class,'classe_matiere_modifierlecons'])->name('liste_classe_matiere_modifierlecon_enseignant');
Route::get('/enseignant/{id}/classe/{id_c}/liste_etudiants',[App\Http\Controllers\Enseignants::class,'classe_eleve'])->name('liste_classe_eleve');

/*ROUTE DU MODULE ETUDIANT*/
Route::post('/etudiant/index',function (){
    return view('etudiant.index');
})->name('tb_etudiant');
Route::get('/etudiant/{id}',[App\Http\Controllers\Etudiant::class,'index'])->name('etudiant');

Route::get('/etudiant/{id}/classe/{id_c}',[App\Http\Controllers\Etudiant::class,'classe_matiere'])->name('liste_classe_matiere_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons'])->name('liste_classe_matiere_lecon_etudiant');

Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/objectifs_eval',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_objectifs_eval'])->name('liste_classe_matiere_lecon_objectif_etudiant_eval');

Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/prerequiq',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_prerequiq'])->name('liste_classe_matiere_lecon_prerequiq_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/objectifs',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_objectifs'])->name('liste_classe_matiere_lecon_objectif_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/indicateur_de compétences',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_indicateur'])->name('liste_classe_matiere_lecon_indicateur_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/situation_problème',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_situation'])->name('liste_classe_matiere_lecon_situation_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/consigne',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_consigne'])->name('liste_classe_matiere_lecon_consigne_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/trace',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_trace'])->name('liste_classe_matiere_lecon_trace_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/evaluation',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_evaluation'])->name('liste_classe_matiere_lecon_evaluation_etudiant');
Route::get('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/evaluation_success/{note}',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_evaluation_success'])->name('liste_classe_matiere_lecon_evaluation_etudiant_success');

Route::post('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/prerequiq_resultat',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_prerequiq_resultat'])->name('liste_classe_matiere_lecon_prerequiq_resultat_etudiant');
Route::post('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/consigne_resultat',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_consigne_resultat'])->name('liste_classe_matiere_lecon_consigne_resultat_etudiant');
Route::post('/etudiant/{id}/classe/{id_c}/matière/{id_m}/leçon/{id_l}/evaluation_resultat',[App\Http\Controllers\Etudiant::class,'classe_matiere_lecons_evaluation_resultat'])->name('liste_classe_matiere_lecon_evaluation_resultat_etudiant');
