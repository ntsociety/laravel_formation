@extends('layouts.app')

@section('content')
<style>
    .img-fluid{
        height: 150px;
        object-fit: contain;
    }
</style>
<div class="container">
    <h4> {{ $produit->count() }} Resultat trouvé pour {{ $search_text }}
        <form action="{{ route('search') }}" class="d-flex float-end" role="search" method="GET">
            <input class="form-control me-2" type="search" name='search' placeholder="Rechercher produit" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Rechercher</button>
        </form>
    </h4>
    <div class="row">
        @foreach ($produit as $item)
        <div class="col-md-4 col-lg-3 col-sm-6">
            <div class="card shadow p-3">
                <img src="{{ asset('assets/produit/images/'.$item->cover) }}" alt="" class="img-fluid">
                <h4>{{ $item->name }}</h4>
                <h5 class="text-success fw-bold">{{ $item->prix }} F</h5>
                <button class="btn btn-primary">Ajouter au panier</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
