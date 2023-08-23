<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::where('id', '!=', 1)->orderBy('created_at', 'desc')->get();
       return view('admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $data = $request->validate([
            "name" => ['required', 'string', 'max:255'],
        ], [
            'required' => "Ce champ est nécessaire",
        ]);
        $category->name = $data['name'];
        $category->slug = Str::slug($data['name']);
        $category->save();
        return redirect()->route('category.index')->with('message', 'Catégorie ajouté avec succès');

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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
