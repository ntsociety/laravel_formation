<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProduitRequest;
use App\Models\Category;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProduitControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produit = Produit::orderBy('created_at', 'desc')->get();
        return view('admin.produit.index', compact('produit'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::where('id', '!=', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.produit.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProduitRequest $request)
    {
        $produit = new Produit();
        $data = $request->validated();
        if($request->hasFile('cover'))
        {
            $file = $data['cover'];
            $imageName =date('Y-m-d'). '_'.$file->getClientOriginalName();
            $file->move('assets/produit/images/',$imageName);
            $produit->cover = $imageName;
        }
        $produit->name = $data['name'];
        $produit->slug = Str::slug($data['name']);
        $produit->description = $data['description'];
        $produit->prix = $data['prix'];
        $produit->cate_id = $data['cate_id'];
        $produit->save();
        return redirect()->route('produit.index')->with('message', 'Produit ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produit = Produit::findOrFail($id);
        $category = Category::where('id', '!=', 1)->orderBy('created_at', 'desc')->get();
        return view('admin.produit.edit', compact('produit', 'category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProduitRequest $request, string $id)
    {
        $produit = Produit::findOrFail($id);
        $data = $request->validated();
        // vérification et suppression d'image
        if($request->hasFile('cover'))
        {
            $path = 'assets/produit/images/'.$produit->cover;
            if($produit->cover)
            {
                unlink($path);
            }
            $file = $data['cover'];
            $imageName =date('Y-m-d'). '_'.$file->getClientOriginalName();
            $file->move('assets/produit/images/',$imageName);
            $produit->cover = $imageName;
        }
        $produit->name = $data['name'];
        $produit->slug = Str::slug($data['name']);
        $produit->description = $data['description'];
        $produit->prix = $data['prix'];
        $produit->cate_id = $data['cate_id'];
        $produit->update();
        return redirect()->route('produit.index')->with('message', 'Produit ajouté avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produit = Produit::findOrFail($id);
        $path = 'assets/produit/images/'.$produit->cover;
        if($produit->cover)
        {
            unlink($path);
        }
        $produit->delete();
        return redirect()->route('produit.index')->with('message', 'Produit suprimé avec succès');
    }
}
