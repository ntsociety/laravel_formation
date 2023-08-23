@extends('layouts.admin')
@section('content')
{{-- afficher message --}}
    @if (session()->has('message'))
        <div class="alert alert-success" id="success_message">
            {{ session()->get('message') }}
        </div>
    @endif
    {{-- fin --}}

    <div class="card categorie col-md-8 me-auto ms-auto">
        <div class="card-header">
          <h5>Liste de Produits
            <a href="{{ route('produit.create') }}" class="float-end btn btn-outline-primary">Ajouter</a>
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr class="bg-primary text-white fw-bold">
                <th>ID</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                {{-- verification de présence de données --}}
                @if ($produit->count() > 0)
                {{-- boocle pour lister les données --}}
                    @foreach ($produit as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}
                                <p><span><small>{{ $item->category->name }}</small></span></p>
                            </td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->prix }} F</td>
                            <td>
                                <img src="{{ asset('assets/produit/images/'.$item->cover) }}" class="img-fluid img-thumbnail object-fit-cover w-25 h-25" alt="">
                            </td>
                            <td class="d-flex">
                                <form action="{{ route('produit.destroy',$item->id) }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{route('produit.edit',$item->id)}}" class="btn btn-primary btn-sm me-1">Modifier</a>
                                    <a href="" class="btn btn-info btn-sm me-1">Voir</a>
                                    <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                <tr>
                    <td colspan="2" class="text-center">Pas de catégories <span><a href="{{ route('category.create') }}" class="btn btn-sm btn-outline-info">Ajouter</a></span></td>
                  </tr>
                @endif

            </tbody>
          </table>
        </div>
      </div>



@endsection

