<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\Boutique;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class BoutiqueController extends Controller
{
    // Fonction qui va charger la view "Inscription" dans le dossier users
    public function AffichageBoutique()
        {
            $boutiques = Boutique::all();
            $nbr = Panier::query()
            ->where('iduser', session('iduser'))
            ->count();
            return view('boutique.Boutique')->with('boutiques', $boutiques)->with('nbr', $nbr);
        }

    public function AffichageArticle($id)
        {
            $idboutique = $id;
            $users = User::join('boutiques', 'boutiques.iduser', '=', 'users.iduser')->where('boutiques.idproduit', '=', $idboutique)->get(['users.iduser', 'users.nom', 'users.prenom', 'users.email']);
            $boutiques = Boutique::where('idproduit', '=', $idboutique)->get();
            return view('boutique.Article')->with('boutiques', $boutiques)->with('users', $users);
        }

    public function AffichageModificationArticle($id)
        {
            $idboutique = $id;
            $boutiques = Boutique::where('idproduit', '=', $idboutique)->get();
            return view('boutique.UpdateArticle')->with('boutiques', $boutiques);
        }

    public function AffichageCreationArticle()
        {
            return view('boutique.CreateArticle');
        }

        // PANIER

    public function AffichagePanier()
        {
            // Affiche les produits du panier de l'utilisateur connecté
            $sessionID = session('iduser');
            $paniers = Boutique::join('paniers', 'paniers.idproduit', '=', 'boutiques.idproduit')->where('paniers.iduser', '=', $sessionID)->get(['boutiques.idproduit', 'boutiques.quantité', 'boutiques.nom','boutiques.description', 'boutiques.prix', 'boutiques.img', 'paniers.idpanier', 'paniers.pquantité']);

            return view('boutique.Panier')->with('paniers', $paniers);
        }

    public function ConfirmationCommande() {
            $users = User::where('iduser', session('iduser'))->get(['nom', 'prenom']);
            return view('boutique.Confirmation')->with('users', $users);
    }

    // ****************************** ACTIONS ****************************** /

    // Fonction pour ajouter un article

    public function CreateArticleAction(Request $request)
        {

            $request->validate([
                'nom' => ['required'],
                'description' => ['required'],
                'prix' => ['required'],
                'quantité' => ['required'],
                'img' => ["required", "image", "mimes:jpg,jpeg,png,gif,svg,webp", "max:2048"],
            ]);

            $path = $request->file('img')->store('boutique-storage', 'public');
            $iduser = Session::get('iduser');

            $article = new Boutique();
            $article->iduser = $iduser;
            $article->nom = request('nom');
            $article->description = request('description');
            $article->prix = request('prix');
            $article->quantité = request('quantité');
            $article->img = $path;
            $article->save();

            return redirect('/boutique');
        }

    // Fonction pour modifier un article

    public function UpdateArticleBoutique($id)
        {
            request()->validate([
                'nom' => ['required'],
                'description' => ['required'],
                'prix' => ['required'],
                'quantité' => ['required'],
            ]);

            $nom = request('nom');
            $description = request('description');
            $prix = request('prix');
            $quantité = request('quantité');

            $array_update = ['nom' => $nom, 'description' => $description, 'prix' => $prix, 'quantité' => $quantité];

            $UpdateBoutique = Boutique::where('idproduit', $id);

            $UpdateBoutique->update($array_update);

            return redirect('/boutique');
        }


    // Fonction pour supprimer un article

    public function DeleteArticleBoutique($id)
        {
            $boutique = Boutique::where('idproduit', $id);
            $boutique->delete();

            return redirect('/boutique');
        }

    // PANIER
    // Fonction pour ajouter un article au panier

    public function AddtoCart(Request $request)
        {
            $request->validate([
                'pquantité' => ['required'],
            ]);

            $iduser = Session::get('iduser');
            $idproduit = request()->idproduit;

            // Soustraire les quantités disponibles
            $getquantité = Boutique::where('idproduit', $idproduit)->get()->implode('quantité');
            $quantité = request()->pquantité;
            DB::table('boutiques')->where('idproduit', $idproduit)->update(['quantité' => $getquantité - $quantité]);

            // Ajoute le produit au panier
            $panier = new Panier();
            $panier->iduser = $iduser;
            $panier->idproduit = $idproduit;
            $panier->pquantité = request('pquantité');
            $panier->save();

            return redirect('/panier');
        }

    // Fonction pour supprimer un produit du panier

    public function DeleteFromCart($idpanier)
        {
            // ID DU PANIER
            $panier = Panier::where('idpanier', $idpanier);
            // ID DU PRODUIT DE LA BOUTIQUE
            $produit = Panier::where('idpanier', $idpanier)->get(['idproduit'])->implode('idproduit');

            // Rajouter les quantités disponibles
            $quantitéBoutique = Boutique::where('idproduit', $produit)->get(['quantité'])->implode('quantité');
            $quantitéPanier = Panier::where('idproduit', $produit)->get()->implode('pquantité');
            DB::table('boutiques')->where('idproduit', $produit)->update(['quantité' => $quantitéBoutique + $quantitéPanier]);

            // Supprime le produit du panier
            $panier->delete();

            return redirect('/panier');
        }


    // Fonction pour confirmer la commande - supprime le panier

    public function DeleteAllFromCart() 
        {
            $delete = Panier::where('iduser', session('iduser'));
            $delete->delete();
            return redirect('/confirmation-commande');
        }
}


