<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(
        Request $request
    ){
        $this->request = $request;
    }

    // Fonction qui va charger la view "Inscription" dans le dossier users
    public function AffichageFormulaireInscription()
    {
        return view('users.Inscription');
    }

    // Fonction qui va charger la view "Connexion" dans le dossier users
    public function AffichageFormulaireConnexion()
    {
        return view('users.Connexion');
    }

    // Fonction qui va charger la view "Mon Compte" dans le dossier users
    public function AffichageMonCompte() {

        $session = session('iduser');
        $items = Item::where('iduser', '=', $session)->get();

        if($items->isEmpty()){
            return view('users.MonCompte')->with('items', null);
        }else{
            return view('users.MonCompte')->with('items', $items);
        }
        
    }

    // Fonction qui va charger la view "Modification d'avatar" dans le dossier users
    public function AffichageAvatar() {
        return view('users.UpdateAvatar');
    }

    // ****************************** ACTIONS ****************************** /

    // Fonction pour réaliser l'inscription
    public function InscriptionAction(Request $request)
    {

        // Requête pour la sécurité du site, sécurise les entrées dans la base de données pour que l'utilisateur ne lance pas d'attaques
        $request->validate([
            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email'],
            'mdp' => ['required'],
            'password_confirmation' => ["required"],
        ]);

        // On met dans des variables les valeurs de l'utilisateur
        $nom = request('nom');
        $prenom = request('prenom');
        $email = request('email');
        $mdp = request('mdp');
        $password_confirmation = request('password_confirmation');

        // Si le mot de passe est différent du mot de passe à confirmer on renvoit à la connexion
        if ($mdp != $password_confirmation) {
            return redirect('/inscription');
        }

        // On met dans une variable un nouvel utilisateur grâce au model User.php
        $user = new User;

        // On reprend les valeurs de l'utilisateur pour l'envoyer dans la base de données
        $user->nom = $nom;
        $user->prenom = $prenom;
        $user->email = $email;
        $user->mdp = bcrypt($mdp);
        // On met par défaut ces informations dans la base de données 
        $user->avatar = 'img/avatar/default-profile.png';
        $user->type = 'user';
        // On sauvegarde
        $user->save();

        // Si il y a bien un utilisateur d'enregistré on renvoit à la page d'accueil
        if ($user != null) {
            return redirect('/connexion');
        } else {
        // Si l'utilisateur est vide on renvoit à la page inscription
            return redirect('/inscription');
        }
    }

    // Fonction de la connexion
    public function ConnexionAction()
    {
        // Pour valider la saisie, ces informations sont nécessaires
        request()->validate([
            'email' => ['required', 'email'],
            'mdp' => ['required']
        ]);

        // Dans une variable on stocke la requête suivante :
        $user = User::where('email', '=', request('email'))->first();

        // Si il y a un utilisateurAffichageMonCompte
        if ($user) {
            // Si le mot de passe hashé correspond au mot de passe de la base de données
            if (Hash::check(request('mdp'), $user->mdp)) {

                // On ouvre une session avec ces variables de session
                request()->session()->put([

                    'iduser' => $user->iduser,
                    'nom' => $user->nom,
                    'prenom' => $user->prenom,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'type' => $user->type,
                ]);
                // On redirige sur la page d'accueil
                return redirect('/mon-profil');
            } else {
                // Si le mot de passe ne correspond pas, on revoit sur la page connexion
                return redirect('/connexion');
            }
        } else {
            // Si il n'y a pas d'utilisateur, on revoit sur la page connexion
            return redirect('/connexion');
        }
    }

    // Fonction pour la déconnexion
    public function DeconnexionAction()
    {
        // Si la session comprend un id
        if (session()->has('iduser')) {
            // On détruit les variables de session suivantes
            session()->pull("iduser");
            session()->pull("nom");
            session()->pull("prenom");
            session()->pull("email");
            session()->pull("avatar");
            session()->pull("type");
        }
        // Et on redirige sur la page d'accueil
        return redirect('/');
    }

    // Fonction pour poster les items
    public function PostItems() {
        $this->request->validate([
            '*' => ['required'],
        ]);

        for($i = 1; $i < count($this->request->all(), COUNT_NORMAL); $i++){
            
            $stock = 'item-'. $i;
            $tab = explode("*", $this->request->get($stock));
            $items =  new Item;
            $items->item = $tab[1];
            $items->img = $tab[0];
            $items->iduser = session()->get("iduser");
            $items->save();
        }

        return redirect('/mon-profil');
    }

    // Fonction pour modifier l'avatar <-------- A MODIFIER
    public function UpdateAvatarAction(Request $request) {
        $request->validate([
            'avatar' => ['required'],
        ]);

        $putUserAvatar = User::where('iduser', session('iduser'));
        $putUserAvatar->update(['avatar' =>request('avatar')]);
        request()->session()->put([
            'avatar' => request('avatar')
        ]);
        
        return redirect('/mon-profil');
    }

    // Fonction pour modifier le profil
    public function UpdateAction(Request $request) {
    
        // Le mot de passe doit être confirmé
        $request->validate([
            'mdp' => ['required'],
            'password_confirmation' => ["required"],
        ]);
    
        // Permettra de rechercher l'utilisateur avec son iduser
        $user = User::where('iduser', session('iduser'));

        if(request('nom') != "") {
            $user->update(['nom' => request('nom')]);
            request()->session()->put([
                'nom' => request('nom')
            ]);
        }

        if(request('prenom') != "") {
            $user->update(['prenom' => request('prenom')]);

            request()->session()->put([
                'prenom' => request('prenom')
            ]);
        }

        if(request('email') != ""){
            $user->update(['email' => request('email')]);

            request()->session()->put([
                'email' =>  request('email'),
            ]);
        }

        if(request('mdp') != "") {
            $user->update(['mdp' => bcrypt(request('mdp'))]);

        }

        return redirect('/mon-profil');
    }
}
