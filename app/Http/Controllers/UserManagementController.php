<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
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
            $users = User::where('type', '=', 'Administrateur')->get(['iduser','idabri','idconfrerie', 'isVerified', 'type', 'nom', 'prenom', 'avatar', 'email']);
            return view('usersManagement.adminManagement')->with('users', $users);
        }

        // Fonction qui va charger la view "Gestion d'utilisateur" dans le dossier users
        public function AffichageUserGestion()
        {
            $users = User::where('type', '=', 'Utilisateur')->get(['iduser', 'idabri','idconfrerie', 'isVerified', 'type', 'nom', 'prenom', 'avatar', 'email']);
            return view('usersManagement.userManagement')->with('users', $users);
        }


        // ****************************** ACTIONS ****************************** /


        public function UpdateToAdminAction(Request $request) {

            $request->validate([
                'type' => 'required',
            ]);
        
            DB::table('users')
                ->where('iduser', $request->iduser)
                ->update(
                    ['type' => $request->type]
                );

            return redirect('/gestion-administrateurs');
        }

        public function UpdateToUserAction(Request $request) {

            $request->validate([
                'type' => 'required',
            ]);
        
            DB::table('users')
                ->where('iduser', $request->iduser)
                ->update(
                    ['type' => $request->type]
                );

            return redirect('/gestion-utilisateurs');
        }
}