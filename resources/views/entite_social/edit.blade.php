<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title>Modification</title>
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
        <h1>Modifier une entité sociale</h1>
        <form method="post" action="{{ route('entite_social.update', $entiteSocial->id_entite_social) }}">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="raison_social">Raison sociale</label>
            <input type="text" class="form-control" name="raison_social" value="{{$entiteSocial->raison_social}}" id="raison_social" required>
          </div>
          <div class="form-group">
            <label for="numero_registre">Numéro de registre</label>
            <input type="number" class="form-control" value="{{$entiteSocial->numero_registre}}" name="numero_registre" id="numero_registre" required>
          </div>
          <div class="form-group">
            <label for="patente">Patente</label>
            <input type="text" class="form-control" value="{{$entiteSocial->patente}}" name="patente" id="patente" required>
          </div>
          <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" value="{{$entiteSocial->adresse}}" name="adresse" id="adresse" required>
          </div>
          <div class="form-group">
            <label for="code_postal">Code postal</label>
            <input type="text" class="form-control" value="{{$entiteSocial->code_postal}}" name="code_postal" id="code_postal" required>
          </div>
          <button type="submit" class="btn btn-success">Modifier</button>
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