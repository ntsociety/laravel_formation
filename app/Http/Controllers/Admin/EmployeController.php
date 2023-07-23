<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function employes()
    {
        $employe = Employe::orderBy('created_at', 'DESC')->get();
        // dd($employe);
        return view('admin.employes.employes', compact('employe'));
    }
    // page de de formulaire
    public function ajout_employe()
    {
        return view('admin.employes.ajout-employés');
    }
    // recupération des données
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'f_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:8'],
            'adresse' => ['required', 'string', 'max:255'],
            'age' => ['required', 'numeric', 'digits:2'],
            'salaire' => ['required', 'numeric'],
        ], [
            'required' => 'Ce champ est obligatoire.',
            'string' => 'Uniquement les chaines de caractères.',
            'max' => 'Ce champ ne va pas dépassé 225 caractères',
            'numeric' => 'Uniquement les chiffres',
            'phone.digits' => 'ce Champ doit être à 8 chiffres',
            'age.digits' => 'ce Champ doit être à 2 chiffres',
        ]);
        Employe::create($data);
        return redirect()->route('list-employes');
    }
    // information sur un employé
    public function show($id)
    {
        $employe = Employe::findOrFail($id);
        // dd($employe);
        return view('admin.employes.view', compact('employe'));
    }
    // modifier les info d'un employé
    public function edit($id)
    {
        $employe = Employe::findOrFail($id);
        // dd($employe);
        return view('admin.employes.edit', compact('employe'));
    }
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'f_name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'numeric', 'digits:8'],
            'adresse' => ['required', 'string', 'max:255'],
            'age' => ['required', 'numeric', 'digits:2'],
            'salaire' => ['required', 'numeric'],
        ], [
            'required' => 'Ce champ est obligatoire.',
            'string' => 'Uniquement les chaines de caractères.',
            'max' => 'Ce champ ne va pas dépassé 225 caractères',
            'numeric' => 'Uniquement les chiffres',
            'phone.digits' => 'ce Champ doit être à 8 chiffres',
            'age.digits' => 'ce Champ doit être à 2 chiffres',
        ]);
        $employe->update($data);
        return redirect()->route('list-employes');

    }
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();
        return redirect()->route('list-employes');

    }
}
