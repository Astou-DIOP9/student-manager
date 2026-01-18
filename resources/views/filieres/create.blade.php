@extends('layouts.app')

@section('content')
<h2>Ajouter une Filière</h2>

<form method="POST" action="{{ route('filieres.store') }}">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nom de la filière</label>
        <input type="text" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Selectionner l'ufr</label>
       <select name="ufr_id" class="form-control" required>
          @foreach ($ufrs as $u)
            <option value="{{ $u->id }}">{{ $u->nom }}</option>
          @endforeach
        </select>
    </div>
    <button class="btn btn-primary">Enregistrer</button>
    <a href="{{ route('filieres.index') }}" class="btn btn-secondary">Retour</a>
</form>
@endsection
