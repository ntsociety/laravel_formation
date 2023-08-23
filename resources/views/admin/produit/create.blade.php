@extends('layouts.admin')
@section('content')

<div class="card categorie col-md-8 me-auto ms-auto">
    <div class="card-header">
      <h5>Ajouter une Catégories
        <a href="{{ route('produit.index') }}" class="float-end btn btn-danger">Retour</a>
      </h5>
    </div>
    <div class="card-body">
     <div class="col-md-8 me-auto ms-auto">
        <form action="{{ route('produit.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-2">
                <label for="">Catégory</label>
                <select name="cate_id" id="" class="form-select">
                    <option value="1" selected>Sélectionner une catégorie</option>
                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

           <div class="form-group mb-2">
                <label for="">Nom</label>
                <input type="text" name="name" placeholder="nom" class="form-control">
           </div>
           <div class="form-group mb-2">
                <label for="">Description</label>
                <input type="text" name="description" placeholder="description" class="form-control">
           </div>
           <div class="form-group mb-2">
                <label for="">Prix</label>
                <input type="number" name="prix" placeholder="prix" class="form-control">
           </div>
           <div class="form-group mb-2">
                <label for="">Image</label>
                <input type="file" name="cover"  class="form-control">
           </div>

           <button type="submit" class="btn btn-sm btn-primary w-100">Ajouter</button>
          </form>
     </div>
    </div>
  </div>

@endsection

