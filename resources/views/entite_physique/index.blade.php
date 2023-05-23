<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entités Physiques</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
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
        <h1>Liste des entités physiques</h1>
        <div class="pull-right mb-2">
          <a class="btn btn-success" href="{{ route('entite_physique.create') }}"> Create Company</a>
        </div>
        @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
          </div>
        @endif
        <table class="table">
          <thead>
            <tr>
              <th>ID Entite Physique</th>
              <th>ID Entite Social</th>
              <th>Libelle</th>
              <th>N° Client</th>
              <th>Adresse</th>
              <th>Code postal</th>
              <th>Status</th>
              <th>Date Creation</th>
              <th width="20%">Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($entites as $entitePhysique)
              <tr>
                <td>{{ $entitePhysique->id_entite_physique }}</td>
                <td>{{ $entitePhysique->id_entite_social }}</td>
                <td>{{ $entitePhysique->libelle }}</td>
                <td>{{ $entitePhysique->numero_client }}</td>
                <td>{{ $entitePhysique->adresse }}</td>
                <td>{{ $entitePhysique->code_postal }}</td>
                <td>{{ $entitePhysique->status_ep }}</td>
                <td>{{ $entitePhysique->date_creation }}</td>
                <td>
                  <form action="{{ route('entite_physique.destroy',$entitePhysique->id_entite_physique) }}" method="post">
                  <a class="btn btn-primary" href="{{ route('entite_physique.edit', $entitePhysique->id_entite_physique) }}" >Modifier</a>
                  <a class="btn btn-primary" href="{{ route('entite_physique.details', $entitePhysique->id_entite_physique) }}" >details</a>
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