<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="entete">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><i><strong>Student Manager</strong></i></a>
      <div class="link">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="{{ route('ufrs.index') }}" style="color: white">UFR</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('etudiants.index') }}" style="color: white">Étudiants</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('filieres.index') }}" style="color: white">Filières</a></li>
            </ul>
        </div>
      </div>
    </div>
</nav>
<div class="container py-4">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
<style>
.link{
        margin: 5px;
        text-align: right;
    }
</style>
