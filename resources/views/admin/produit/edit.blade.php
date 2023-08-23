@extends('layouts.admin')
@section('content')

<div class="card categorie col-md-8 me-auto ms-auto">
    <div class="card-header">
      <h5>Modifier la Catégorie
        <a href="{{ route('produit.index') }}" class="float-end btn btn-danger">Retour</a>
      </h5>
    </div>
    <div class="card-body">
     <div class="col-md-8 me-auto ms-auto">
        <form action="{{ route('produit.update',$produit->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-2">
                <label for="">Catégory</label>
                <select name="cate_id" id="" class="form-select">
                    @if ($produit->cate_id == 1)
                    <option value="1" selected>Sélectionner une catégorie</option>
                    @else
                    <option value="{{ $produit->category->id }}" selected hidden>{{ $produit->category->name }}</option>
                    @endif

                    @foreach ($category as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>

           <div class="form-group mb-2">
                <label for="">Nom</label>
                <input type="text" name="name" value="{{ $produit->name }}" placeholder="nom" class="form-control">
           </div>
           <div class="form-group mb-2">
                <label for="">Description</label>
                <input type="text" name="description" value="{{ $produit->description }}" placeholder="description" class="form-control">
           </div>
           <div class="form-group mb-2">
                <label for="">Prix</label>
                <input type="number" name="prix" value="{{ $produit->prix }}" placeholder="prix" class="form-control">
           </div>

           <div class="form-group mb-2">
                <img src="{{ asset('assets/produit/images/'.$produit->cover) }}" class="ime-fluid w-25 h-25 object-fit-cover" alt="">
                <br>
                <label for="">Image</label>
                <input type="file" name="cover"  class="form-control @error('cover') is-invalid @enderror">
                @error('cover')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
           </div>

           <button type="submit" class="btn btn-sm btn-primary w-100">Modifier</button>
          </form>
     </div>
    </div>
  </div>

@endsection

