<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function AffichageFormulaireInscription()
    {
        return view('users.Inscription');
    }


    public function AffichageFormulaireConnexion()
    {
        return view('users.Connexion');
    }






    //******************************action***************** */

    public function InscriptionAction(Request $request)
    {

        $request->validate([

            'nom' => ['required'],
            'prenom' => ['required'],
            'email' => ['required', 'email'],
            'mdp' => ['required'],
            'password_confirmation' => ["required"],
        ]);


        $nom = request('nom');
        $prenom = request('prenom');
        $email = request('email');
        $mdp = request('mdp');
        $password_confirmation = request('password_confirmation');

        if ($mdp != $password_confirmation) {
            return redirect('/inscription');
        }

        $user = new User;

        $user->nom = $nom;
        $user->prenom = $prenom;
        $user->email = $email;
        $user->mdp = bcrypt($mdp);
        $user->avatar = 'img/avatar/default-profile.png';
        $user->type = 'user';
        $user->save();

        if ($user != null) {
            return redirect('/');
        } else {
            return redirect('/inscription');
        }
    }

    public function ConnexionAction()
    {
        request()->validate([
            'email' => ['required', 'email'],
            'mdp' => ['required']
        ]);

        $user = User::where('email', '=', request('email'))->first();

        if ($user) {

            if (Hash::check(request('mdp'), $user->mdp)) {

                request()->session()->put([

                    'iduser' => $user->iduser,
                    'nom' => $user->nom,
                    'prenom' => $user->prenom,
                    'email' => $user->email,
                    'avatar' => $user->avatar,
                    'type' => $user->type,
                ]);

                return redirect('/');
            } else {

                return redirect('/connexion');
            }
        } else {

            return redirect('/connexion');
        }
    }


    public function DeconnexionAction()
    {

        if (session()->has('iduser')) {

            session()->pull("iduser");
            session()->pull("nom");
            session()->pull("prenom");
            session()->pull("email");
            session()->pull("avatar");
            session()->pull("type");
        }

        return redirect('/');
    }
}
