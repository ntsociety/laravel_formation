@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Liste des employés
                    <a href="{{ route('ajout-employe') }}" class="btn btn-sm btn-primary float-end">Ajouter</a>
                </h4>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Adresse</th>
                            <th>Age</th>
                            <th>Salaire</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employe as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->f_name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->adresse }}</td>
                                <td>{{ $item->age }} ans</td>
                                <td>{{ $item->salaire }} F</td>
                                <form action="{{ route('destroy-employe', $item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <td>
                                        <a href="{{ route('show-employe', $item->id) }}" class="btn -btn-sm btn-success">Voir</a>
                                        <a href="{{ route('edit-employe', $item->id) }}" class="btn -btn-sm btn-primary">Modifier</a>
                                        <button type="submit" class="btn -btn-sm btn-danger" onclick="return confirm('Voulez-vous vraiment supprimer cet employé?')">Supprimer</button>
                                    </td>
                                </form>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
