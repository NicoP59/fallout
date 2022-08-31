<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserManagementController extends Controller
{
        // Fonction qui va charger la view "Gestion d'utilisateur" dans le dossier users
        public function AffichageGestion()
        {
            return view('usersManagement.userManagement');
        }
}

// ****************************** ACTIONS ****************************** /