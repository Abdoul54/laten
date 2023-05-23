<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entité Sociales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
  <div class="container">
    <div>
    <ul class="nav nav-fill justify-content-end">
      <li class="nav-item">
        <a class="nav-link active text-dark" href="{{ route('entite_social.index') }}">Entite Social</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('entite_physique.index') }}">Entite Physique</a>
      </li>
    </ul>
    </div>
    <div class="row">
      <div class="col-md-12">
        <h1>Liste des entités sociales</h1>
        <div class="pull-right mb-2">
          <a class="btn btn-success" href="{{ route('entite_social.create') }}"> Create Company</a>
        </div>
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th>ID Entite Social</th>
              <th>Raison sociale</th>
              <th>Numéro de registre</th>
              <th>Patente</th>
              <th>Adresse</th>
              <th>Code postal</th>
              <th width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($entites as $entiteSociale)
              <tr>
                <td>{{ $entiteSociale->id_entite_social }}</td>
                <td>{{ $entiteSociale->raison_social }}</td>
                <td>{{ $entiteSociale->numero_registre }}</td>
                <td>{{ $entiteSociale->patente }}</td>
                <td>{{ $entiteSociale->adresse }}</td>
                <td>{{ $entiteSociale->code_postal }}</td>
                <td>
                  <form action="{{ route('entite_social.destroy',$entiteSociale->id_entite_social) }}" method="post">
                  <a class="btn btn-primary" href="{{ route('entite_social.edit', $entiteSociale->id_entite_social) }}" >Modifier</a>
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>