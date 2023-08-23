<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        $produit = Produit::all();
        return view('index', compact('produit'));
    }
    public function employes()
    {
        return view('admin.employes.employes');
    }
    public function ajout_employe()
    {
        return view('admin.employes.ajout-employés');
    }
    public function search()
    {
        $search_text = $_GET['search'];
        $produit = Produit::where('name', 'LIKE', '%'.$search_text.'%')
        ->orWhere('description', 'LIKE', '%'.$search_text.'%')->get();
        return view('search', compact('produit', 'search_text'));
    }
}
