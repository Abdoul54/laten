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
        <a class="nav-link active text-dark" href="{{ route('entite_physique.index') }}">Entite Physique</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('entite_social.index') }}">Entite Social</a>
      </li>

    </ul>
    <div class="row">
      <div class="col-md-12">
        <h1>Ajouter une entité physique</h1>
        @if(session('status'))
        <div class="alert alert-success mb-1 mt-1">
          {{ session('status') }}
        </div>
        @endif
        <form method="post" action="{{ route('entite_physique.store') }}">
          @csrf
          <div class="form-group">
            <label for="id_entite_social">Entite Social</label>
            <select name="id_entite_social" id="id_entite_social" class="form-control">
              @foreach ($entites as $entiteSocial)
                  <option value="{{ $entiteSocial->id_entite_social }}">{{ $entiteSocial->raison_social }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <label for="libelle">Libelle</label>
            <input type="text" class="form-control" name="libelle" id="libelle" required>
          </div>
          <div class="form-group">
            <label for="numero_client">N° Client</label>
            <input type="text" class="form-control" name="numero_client" id="numero_client" required>
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" required>
          </div>
          <div class="form-group">
            <label for="code_postal">Code postal</label>
            <input type="text" class="form-control" name="code_postal" id="code_postal" required>
          </div>
          <div class="form-group">
            <label for="status_ep">Status</label>
            <select name="status_ep" id="status_ep" class="form-control">
              <option value="PR" selected>PR</option>
              <option value="AC" >AC</option>
              <option value="KO" >KO</option>
            </select>
          </div>
          <button type="submit" class="btn btn-success">Ajouter</button>
          <div class="pull-right float-right">
            <a class="btn btn-primary" href="{{ route('entite_physique.index') }}" enctype="multipart/form-data">
                Back</a>
          </div>
        </form>
      </div>
      
    </div>
  </div>
</body>
</html>