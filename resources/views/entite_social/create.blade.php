<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Création</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <ul class="nav nav-fill justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-dark" href="{{ route('entite_social.index') }}">Entite Social</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('entite_physique.index') }}">Entite Physique</a>
      </li>
    </ul>
    <div class="row">
      <div class="col-md-12">
        <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('entite_social.index') }}" enctype="multipart/form-data">
              Back</a>
        </div>
        <h1>Ajouter une entité sociale</h1>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
            {{ session('status') }}
        </div>
        @endif
        <form method="post" action="{{ route('entite_social.store') }}">
          @csrf
          <div class="form-group">
            <label for="raison_social">Raison sociale</label>
            <input type="text" class="form-control" name="raison_social" value="" id="raison_social" required>
          </div>
          <div class="form-group">
            <label for="numero_registre">Numéro de registre</label>
            <input type="number" class="form-control" name="numero_registre" id="numero_registre" required>
          </div>
          <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" name="patente" id="patente" required>
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" required>
          </div>
          <div class="form-group">
            <label for="code_postal">Code postal</label>
            <input type="text" class="form-control" name="code_postal" id="code_postal" required>
          </div>
          <button type="submit" class="btn btn-success">Ajouter</button>
          <div class="pull-right float-right">
            <a class="btn btn-primary" href="{{ route('entite_social.index') }}" enctype="multipart/form-data">
                Back</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>