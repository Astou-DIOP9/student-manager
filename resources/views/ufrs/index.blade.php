@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between mb-3">
    <h2>Liste des ufrs</h2>
    <a href="{{ route('ufrs.create') }}" class="btn btn-success">+Ajouter UFR</a>
</div>

<table class="table table-bord">
   <thead class="table-dark">
        <tr>
            <th>Identifiant</th>
            <th>Nom</th>
             <th>Date de creation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ufrs as $ufr)
        <tr>
            <td>{{ $ufr->id }}</td>
            <td>{{ $ufr->nom }}</td>
            <td>{{ $ufr->created_at}}</td>
            <td>
                <form action="{{ route('ufrs.destroy', $ufr->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Supprimer ?')" class="btn btn-danger btn-sm">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
