@extends('layouts.app')

@section('content')
<h2>Ajouter un Étudiant</h2>

<form method="POST" action="{{ route('etudiants.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nom complet</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Date de Naissance:</label>
        <input type="date" name="date_naissance" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">Filière</label>
        <select name="filiere_id" class="form-control" required>
            @foreach ($filieres as $f)
            <option value="{{ $f->id }}">{{ $f->nom }}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('etudiants.index') }}" class="btn btn-secondary">Retour</a>
    
</form>
@endsection
