@extends('layouts.admin')
@section('content')

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h4>Ajouter un employé
                    <a href="{{ url('liste-des-employés') }}" class="btn btn-sm btn-primary float-end">Retour</a>
                </h4>
            </div>
            <div class="card-body">
                <div class="col-md-8 me-auto ms-auto">
                    <form action="{{ route('employe-store') }}" method="post">
                        @csrf
                        <input type="text" placeholder="Nom" name="name" value="{{ old('name') }}" class="form-control mb-3 @error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" placeholder="Prénom" name="f_name" value="{{ old('f_name') }}" class="form-control mb-3 @error('f_name') is-invalid @enderror">
                        @error('f_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" placeholder="Téléphone" name="phone" class="form-control mb-3 @error('phone') is-invalid @enderror" >
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" placeholder="Votre Adresse" name="adresse" class="form-control mb-3 @error('adresse') is-invalid @enderror">
                        @error('adresse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" placeholder="Salaire" name="salaire" class="form-control mb-3 @error('salaire') is-invalid @enderror" >
                        @error('salaire')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <input type="text" placeholder="Votre âge" name="age" class="form-control mb-3 @error('age') is-invalid @enderror">
                        @error('age')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <button class="btn btn-sm btn-primary w-100" type="submit">Ajouter</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection
