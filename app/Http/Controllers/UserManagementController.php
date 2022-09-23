<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $usersConfrerie = User::join('confreries', 'confreries.confrerie', '=', 'users.idconfrerie')->where('type', '=', 'Administrateur')->get(['confreries.confrerie', 'confreries.img', 'users.iduser', 'users.idabri', 'users.idconfrerie', 'users.isVerified', 'users.type', 'users.nom', 'users.prenom', 'users.avatar', 'users.email']);
        $users = User::where('type', '=', 'Administrateur')->where('idconfrerie', '=', null)->get(['iduser', 'idabri', 'idconfrerie', 'isVerified', 'type', 'nom', 'prenom', 'avatar', 'email']);
        return view('usersManagement.adminManagement')->with('users', $users)->with('usersConfrerie', $usersConfrerie);
    }

    // Fonction qui va charger la view "Gestion d'utilisateur" dans le dossier users
    public function AffichageUserGestion()
    {

        $usersConfrerie = User::join('confreries', 'confreries.confrerie', '=', 'users.idconfrerie')->where('type', '=', 'Utilisateur')->get(['confreries.confrerie', 'confreries.img', 'users.iduser', 'users.idabri', 'users.idconfrerie', 'users.isVerified', 'users.type', 'users.nom', 'users.prenom', 'users.avatar', 'users.email']);
        $users = User::where('type', '=', 'Utilisateur')->where('idconfrerie', '=', null)->get(['iduser', 'idabri', 'idconfrerie', 'isVerified', 'type', 'nom', 'prenom', 'avatar', 'email']);
        return view('usersManagement.userManagement')->with('users', $users)->with('usersConfrerie', $usersConfrerie);
    }


    // ****************************** ACTIONS ****************************** /


    public function UpdateToAdminAction(Request $request)
    {

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

    public function UpdateToUserAction(Request $request)
    {

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
//Fonction qui va supprimer les utilisateur
    public function deleteUser($iduser)
    {
        $user = User::where('iduser', $iduser);
        $user->delete();

        return redirect('/gestion-utilisateurs');
    }
//Fonction qui va supprimer les administrateur
    public function deleteAdmin($iduser)
    {
        $user = User::where('iduser', $iduser);
        $user->delete();

        return redirect('/gestion-administrateurs');
    }

}
