<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AdminMiddelware;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ExPortController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CandidatureController;

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



Auth::routes();



Route::get('/',[UserController::class,'home'])->name('home');


Route::middleware(['auth'])->group(
    function(){

     Route::get('/dashboard/home',[UserController::class,'dashboard'])->name('home_dashboard');
     //candiature
     Route::get('/dashboard/candidature/liste',[CandidatureController::class,'show'])->name('liste_candidature');

    Route::get('/dashboard/candidature/ajout',[CandidatureController::class,'form'])->name('ajout_candidature');

    Route::post('/dashboard/candidature/create',[CandidatureController::class,'create'])->name('creer_candidature');

    Route::get('/dashboard/candidature/detail/{id_candidature}',[CandidatureController::class,'detail'])->name('detail_candidature');

    Route::get('/dasboard/candidature/rejet' , [CandidatureController::class, 'rejet'])->name('candidature.rejet');
    Route::get('/dashboard/candidature/confirm', [CandidatureController::class, 'confirm'])->name('candidature.valide');
    Route::get('/dashboard/candidature/encours', [CandidatureController::class, 'progress'])->name('candidature.encours');

    Route::get('/dashboard/candidature/delete/{id_candidature}',[CandidatureController::class,'delete'])->name('delete_candidature');

    Route::get('/dashboard/candidature/edit/{id_candidature}',[CandidatureController::class,'edit'])->name('modifier_candidature');

    Route::any('/dashboard/candidature/update/{id}',[CandidatureController::class,'update'])->name('update_candidature');

    Route::get('/profil/users' , [ProfilController::class , 'index'])->name('profil.user');

    Route::get('/data' , [UserController::class, 'user_search']);







    }
);


Route::middleware([AdminMiddelware::class, 'auth'])->group(function(){

   //nouvelle routes pour l'administrateur
   Route::get('/admin/users/list', [AdminController::class, 'index'])->name('listes.users');

   Route::get('/admin/users/edit/{id}' ,[AdminController::class , 'edit_user'])->name('edit.user');
   Route::post('/admin/users/update/{id}', [AdminController::class, 'update_user'])->name('update.user');
  Route::get('/admin/users/delete/{id}', [AdminController::class, 'destroy_user'])->name('destroy.user');
  Route::get('/admin/actions/candidature/insert' , [AdminController::class , 'create'])->name('admin.create');
   Route::get('/admin/index' , [AdminController::class, 'home'])->name('home.admin');
   Route::get('/admin/candidature/detaisl/{id_candidature}', [AdminController::class, 'show'])->name('detail.admin');
   Route::get('/admin/candidature/edit/{id_candidature}',  [AdminController::class, 'edit'])->name('edit.admin');
   Route::get('/admin/candidature/delete/{id}' , [AdminController::class, 'destroy'])->name('destroy.admin');
   Route::put('/admin/candidature/update/{id}' , [AdminController::class, 'update'])->name('admin.update');
   Route::get('/admin/actions/candidature' , [AdminController::class, 'all'])->name('all.candidate');

   Route::post('/admin/actions/create',  [AdminController::class , 'store'])->name('admin.insert');
   Route::get('/admin/actions/candidature/liste' , [AdminController::class , 'liste_admin'])->name('list.admin');
   Route::get('/admin/actions/candidature/valide' , [AdminController::class, 'valide'])->name('candit.valide');
   Route::get('/admin/actions/candidature/encours' , [AdminController::class , 'en_cours'])->name('candit.encours');
   Route::get('/admin/actions/candidature/failled', [AdminController::class, 'failled'])->name('candit.rejet');
   //derniers champs
   Route::get('/admin/newinput/{id_candidature}', [AdminController::class, 'voir'])->name('admin.reserve');
   Route::post('/admin/reserve/{id}' , [AdminController::class, 'afterstatut'])->name('after_statut');


   Route::get('/profile/admin', function(){
    return view('administration.adminprofil.profil');
   });


});


// routes pour rechercher

    Route::get('/content/article/{id}',  [ArticlesController::class, 'home'])->name('content.index');


Route::get('/search' , [AdminController::class , 'search']);
Route::get('/articles/index' ,[ArticlesController::class, 'index']);
Route::get('/articles/forms', [ArticlesController::class, 'create']);
Route::post('/articles/create',  [ArticlesController::class, 'store'])->name('create.articles');
Route::get('/articles/list', [ArticlesController::class, 'liste'])->name('liste.articles');
Route::get('/articles/content/{id}', [ArticlesController::class, 'show'])->name('content.article');
Route::get('/articles/destroy/{id}' , [ArticlesController::class , 'destroy'])->name('destroy.article');
Route::get('/article/edit/{id}',  [ArticlesController::class , 'edit'])->name('edit.article');
Route::post('/article/update/{id}' , [ArticlesController::class, 'update'])->name('update.article');

Route::get('/categories/forms', [CategoryController::class, 'index']);
Route::post('/categories/crearte',[CategoryController::class, 'store'])->name('cate.create');

Route::get('/categories/edit/{id}', [CategoryController::class, 'edit'])->name('cate.edit');
Route::post('/categories/update{id}',  [CategoryController::class, 'update'])->name('cate.update');
Route::get('/categories/delete/{id}' , [CategoryController::class, 'destroy'])->name('cate.destroy');
Route::get('/categories/liste', [CategoryController::class, 'liste_cate'])->name('cate.liste');

Route::get('/home/article/{id}', [ArticlesController::class , 'content_article_home'])->name('content_article_index');


Route::get('/export/candidature/{id_candidature}',[ExPortController::class,'detail_candidature_pdf'])->name('export.candidature');
Route::get('/export/excel' , [CandidatureController::class , 'export_excel'])->name('export.excel');
Route::any('/index/admin/{id}',  [ExPortController::class, 'detail_admin_cand'])->name('admin.export');

Route::get('/candidature/pdf', [ExPortController::class, 'candidature_pdf'])->name('candidat.pdf');

// modifier  le profil de l'utilisateur foritfy

Route::get('/profile', function(){
    return view('dashboarduser.profil.profil');
});


Route::get('/categories', function(){
    return view('administration.gestionarticle.addcate');
});

Route::get('/admin/profil',  function(){

    return view('administration.adminprofil.profil');

});


Route::get('/news', [ArticlesController::class, 'news'])->name('news');


//pages statistiques pour les filieres de formations


Route::get('/assistanat-de-direction-forms-controller-001', function() {
    return view('formation.assistanat-direction');
})->name('bts.assisatant');

Route::get('/ressource-humaine-communication-forms-controller-0023', function() {
    return view('formation.ressources-humaines-et-communication-rhcom');
})->name('bts.rhcom');


Route::get('/finances-comptabillite-gestion-forms-controller-004', function() {
    return view('formation.finance-comptabilite-gestion-entreprise');
})->name('bts.fcgestion');


Route::get('/gestion-commerciale-forms-controller-006', function() {
    return view('formation.gestion-commerciale');
})->name('bts.commerciale');

Route::get('/tourisme-hotelerie-forms-controller-034', function() {
    return view('formation.tourisme-hoteliere');
})->name('bts.tourisme');

Route::get('/system-electronique-gestion-0045', function() {
    return view('formation.systeme-electronique-informatique');
})->name('bts.eletronique');

Route::get('/reseau-informatique-gestion-005', function() {
    return view('formation.reseau-informatique-telecommunuciation');
})->name('bts.reseau');

Route::get('/informatique-developpeur-apps-007', function() {
    return view('formation.informatique-developpeur-application');
})->name('bts.application');




Route::get('/contact-us', function() {
    return view('contact');
});



Route::get('/about-us', function() {
 return view('about');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
