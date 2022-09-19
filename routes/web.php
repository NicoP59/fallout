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

Route::get('/', function () {
    return view('home');
});

Route::get('/nuka-world', function () {
    return view('nuka-world');
});


// INSCRIPTION
// MIDDLEWARES à ajouter dans le Kernel.php
Route::get('/inscription', 'App\Http\Controllers\UserController@AffichageFormulaireInscription')->middleware('NotLogged');
Route::post('/inscription', 'App\Http\Controllers\UserController@InscriptionAction')->middleware('NotLogged');

// CONNEXION
Route::get('/connexion', 'App\Http\Controllers\UserController@AffichageFormulaireConnexion')->middleware('NotLogged');
Route::post('/connexion', 'App\Http\Controllers\UserController@ConnexionAction')->middleware('NotLogged');

// DÉCONNEXION
Route::get('/deconnexion', 'App\Http\Controllers\UserController@DeconnexionAction')->middleware('isLogged');

// MON COMPTE
Route::get('/mon-profil', 'App\Http\Controllers\UserController@AffichageMonCompte')->middleware('isLogged');
Route::post('/mon-profil', 'App\Http\Controllers\UserController@UpdateAction')->middleware('isLogged');
Route::post('/items', 'App\Http\Controllers\UserController@PostItems')->middleware('isLogged');
Route::get('/modifier-avatar', 'App\Http\Controllers\UserController@AffichageAvatar')->middleware('isLogged');
Route::post('/modifier-avatar', 'App\Http\Controllers\UserController@UpdateAvatarAction')->middleware('isLogged');
Route::get('/modifier-confrerie', 'App\Http\Controllers\UserController@AffichageConfrerie')->middleware('isLogged');
Route::post('/modifier-confrerie', 'App\Http\Controllers\UserController@UpdateConfrerieAction')->middleware('isLogged');
Route::get('/delete-compte/{iduser}',  'App\Http\Controllers\UserController@destroy')->middleware('isLogged');

// BOUTIQUE
Route::get('/boutique', 'App\Http\Controllers\BoutiqueController@AffichageBoutique');
Route::get('/boutique/article/{id}', 'App\Http\Controllers\BoutiqueController@AffichageArticle');
// PANIER -> QUE SI CONNECTÉ
Route::get('/panier', 'App\Http\Controllers\BoutiqueController@AffichagePanier');
Route::post('/panier/{idproduit}', 'App\Http\Controllers\BoutiqueController@AddtoCart');
Route::post('/update-article-panier/{idproduit}', 'App\Http\Controllers\BoutiqueController@UpdateCart');
Route::get('/delete-article-panier/{idproduit}', 'App\Http\Controllers\BoutiqueController@DeleteFromCart');
// CRUD BOUTIQUE
Route::get('/create-article', 'App\Http\Controllers\BoutiqueController@AffichageCreationArticle')->middleware('isLogged');
Route::post('/create-article', 'App\Http\Controllers\BoutiqueController@CreateArticleAction')->middleware('isLogged');
Route::get('/update-article/{id}', 'App\Http\Controllers\BoutiqueController@AffichageModificationArticle')->middleware('isLogged');
Route::post('/update-article/{id}', 'App\Http\Controllers\BoutiqueController@UpdateArticleBoutique')->middleware('isLogged');
Route::get('/delete-article/{id}',  'App\Http\Controllers\BoutiqueController@DeleteArticleBoutique')->middleware('isLogged');

// GESTION UTILISATEUR
Route::get('/gestion', 'App\Http\Controllers\UserManagementController@AffichageGestion')->middleware('isAdmin');
Route::get('/gestion-administrateurs', 'App\Http\Controllers\UserManagementController@AffichageAdminGestion')->middleware('isAdmin');
Route::get('/gestion-utilisateurs', 'App\Http\Controllers\UserManagementController@AffichageUserGestion')->middleware('isAdmin');
Route::post('/gestion-utilisateurs/{iduser}', 'App\Http\Controllers\UserManagementController@UpdateToAdminAction')->middleware('isAdmin');
Route::post('/gestion-administrateurs/{iduser}', 'App\Http\Controllers\UserManagementController@UpdateToUserAction')->middleware('isAdmin');
Route::get('/delete-user/{iduser}', 'App\Http\Controllers\UserManagementController@deleteUser')->middleware('isAdmin');
Route::get('/delete-admin/{iduser}', 'App\Http\Controllers\UserManagementController@deleteAdmin')->middleware('isAdmin');

// MAIL
Route::get('/message', "App\Http\Controllers\MessageController@formMessageGoogle");
Route::post('/message', "App\Http\Controllers\MessageController@sendMessageGoogle")->name('send.message.google');

// MOT DE PASSE OUBLIÉ
Route::get('/forget-password', 'App\Http\Controllers\ForgotPasswordController@getEmail');
Route::post('/forget-password', 'App\Http\Controllers\ForgotPasswordController@postEmail');

// RÉINITIALISER LE MOT DE PASSE 
Route::get('/reset-password/{token}', 'App\Http\Controllers\ResetPasswordController@getPassword');
Route::post('/reset-password', 'App\Http\Controllers\ResetPasswordController@updatePassword');

// VÉRIFICATION DE MAIL
Route::get('/envoie-mail/{iduser}', 'App\Http\Controllers\VerificationEmailController@envoieMail');
// VÉRIFICATION DE MAIL CLICK BTN
Route::get('/envoie-mail-btn', 'App\Http\Controllers\VerificationEmailController@envoieMailAfterClickBtnVerif');
// ROUTE DU MAIL 
Route::get('/verif-mail/{token}', 'App\Http\Controllers\VerificationEmailController@updatemail');

// NOS ABRIS
Route::get('/abris', 'App\Http\Controllers\AbriController@AffichageAbri');
Route::get('/abri/{id}', 'App\Http\Controllers\AbriController@AffichageIDAbri');
Route::get('/FormCreate',  'App\Http\Controllers\AbriController@AffichageFormCreate')->middleware('isAdmin');
Route::get('/FormUpdate/{id}',  'App\Http\Controllers\AbriController@AffichageFormUpdate')->middleware('isAdmin');

// CRUD ABRIS
Route::post('/FormCreate',  'App\Http\Controllers\AbriController@Create')->middleware('isAdmin');
Route::post('/FormUpdate/{id}',  'App\Http\Controllers\AbriController@Update')->middleware('isAdmin');
Route::get('/delete/{id}',  'App\Http\Controllers\AbriController@delete')->middleware('isAdmin');

// INSCRIPTION A L'ABRI
Route::post('/UpdateUserAbri/{id}',  'App\Http\Controllers\AbriController@UpdateAbriUserAction')->middleware('isLogged');;
