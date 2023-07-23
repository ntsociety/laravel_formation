<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index()
    {
        return view('index');
    }
    public function employes()
    {
        return view('admin.employes.employes');
    }
    public function ajout_employe()
    {
        return view('admin.employes.ajout-employés');
    }
}
