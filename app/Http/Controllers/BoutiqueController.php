<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Boutique;
use App\Models\Panier;
use Illuminate\Support\Facades\Session;


class BoutiqueController extends Controller
{
    // Fonction qui va charger la view "Inscription" dans le dossier users
    public function AffichageBoutique()
        {
            $boutiques = Boutique::all();
            return view('boutique.Boutique')->with('boutiques', $boutiques);
        }

    public function AffichageArticle($id) 
        {
            $idboutique = $id;
            $boutiques = Boutique::where('idproduit', '=', $idboutique)->get();
            return view('boutique.Article')->with('boutiques', $boutiques);
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
            $paniers = Panier::where('iduser', $sessionID)->get();
            // dd($paniers);

            // Affiche les informations de chaque produit du panier
            $produits = Boutique::join('paniers', 'boutiques.idproduit', "=", "paniers.idpanier")->get();
            dd($produits);

            return view('boutique.Panier')->with('paniers', $paniers)->with('boutiques', $produits);;
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

    public function AddtoCart() 
        {  
            if(!session('iduser')) {
                return redirect('/connexion');
            } else {
                return redirect('/');
            }
        }

    // Fonction pour mettre à jour un produit dans le panier

    public function UpdateCart()
        {

        }

    // Fonction pour supprimer un produit du panier

    public function DeleteFromCart()
        {

        }
}


