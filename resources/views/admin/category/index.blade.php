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
          <h5>Liste de Catégories
            <a href="{{ route('category.create') }}" class="float-end btn btn-outline-primary">Ajouter</a>
          </h5>
        </div>
        <div class="card-body">
          <table class="table table-bordered">
            <thead>
              <tr class="bg-primary text-white fw-bold">
                <th>ID</th>
                <th>Nom</th>
              </tr>
            </thead>
            <tbody>
                {{-- verification de présence de données --}}
                @if ($category->count() > 0)
                {{-- boocle pour lister les données --}}
                    @foreach ($category as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
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

