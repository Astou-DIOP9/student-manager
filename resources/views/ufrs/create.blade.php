@extends('layouts.app')

@section('content')
<h2>Ajouter UFR</h2>

<form method="POST" action="{{ route('ufrs.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nom de l'ufr</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <button class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('filieres.index') }}" class="btn btn-secondary">Retour</a>
</form>
@endsection
