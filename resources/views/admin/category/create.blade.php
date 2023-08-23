@extends('layouts.admin')
@section('content')

<div class="card categorie col-md-8 me-auto ms-auto">
    <div class="card-header">
      <h5>Ajouter une Catégories
        <a href="{{ route('category.index') }}" class="float-end btn btn-danger">Retour</a>
      </h5>
    </div>
    <div class="card-body">
     <div class="col-md-8 me-auto ms-auto">
        <form action="{{ route('category.store') }}" method="post">
            @csrf
           <div class="form-group mb-2">
            <label for="">Nom</label>
            <input type="text" name="name" placeholder="nom" class="form-control">
           </div>
           <button type="submit" class="btn btn-sm btn-primary w-100">Ajouter</button>
          </form>
     </div>
    </div>
  </div>

@endsection

