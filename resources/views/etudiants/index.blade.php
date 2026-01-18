@extends('layouts.app')

@section('content')
<div class="container mt-3">

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Liste des Étudiants</h2>
        <a href="{{ route('etudiants.create') }}" class="btn btn-success">+ Ajouter un étudiant</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Nom</th>
                <th>Email</th>
                <th>Date de naissance</th>
                <th>UFR</th>
                <th>Filière</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->nom }}</td>
                    <td>{{ $etudiant->email }}</td>
                    <td>{{ $etudiant->date_naissance }}</td>
                    <td>{{ $etudiant->ufr->nom }}</td>
                    <td>{{ $etudiant->filiere->nom }}</td>
                    <td class="d-flex gap-1">
                        <form action="{{ route('etudiants.destroy', $etudiant) }}" method="POST" onsubmit="return confirm('Supprimer cet étudiant ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Aucun étudiant trouvé</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    <div class="d-flex justify-content-center">
        {{ $etudiants->links() }}
    </div>

</div>
@endsection
