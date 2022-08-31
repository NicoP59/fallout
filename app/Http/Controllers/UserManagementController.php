<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{

        // Fonction qui va charger la view "Gestion d'utilisateur" dans le dossier users
        public function AffichageGestion()
        {
            return view('usersManagement.allUsersManagement');
        }

        // Fonction qui va charger la view "Gestion d'utilisateur" dans le dossier users
        public function AffichageAdminGestion()
        {
            $users = User::where('type', '=', 'Administrateur')->get(['idabri','idconfrerie', 'age', 'sexe', 'isVerified', 'type', 'nom', 'prenom', 'avatar', 'email']);
            return view('usersManagement.adminManagement')->with('users', $users);
        }

        // Fonction qui va charger la view "Gestion d'utilisateur" dans le dossier users
        public function AffichageUserGestion()
        {
            $users = User::where('type', '=', 'Utilisateur')->get(['idabri','idconfrerie', 'age', 'sexe', 'isVerified', 'type', 'nom', 'prenom', 'avatar', 'email']);
            return view('usersManagement.userManagement')->with('users', $users);
        }


        // ****************************** ACTIONS ****************************** /


        public function UpdateToAdminAction(Request $request) {
            $request->validate([
                'type' => ['required'],
            ]);

            $putToAdmin = User::where('iduser', '=', 'iduser');
            dd($putToAdmin);
            // $putToAdmin->update(['type' => request('type')]);
            // request()->session()->put([
            //     'type' => request('type')
            // ]);

            // return redirect('/gestion-administrateurs');
        }
}