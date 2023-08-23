@extends('layouts.admin')
@section('content')
    @if (session()->has('message'))
        <div class="alert alert-success" id="success_message">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h4>Dashboard</h4>
        </div>
    </div>



@endsection

