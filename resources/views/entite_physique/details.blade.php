<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Détails</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Détails de l'entité physique: {{ $entite_physique->libelle }}</h1>
        @if (empty($details))
            <p class="h4 align-middle">Aucune Résultats</p>
        @else
        @foreach ($details as $detail)
            <div class="row">
                <h2>Article</h2>
                <table class="table">
                    <tr>
                        <th>Libelle</th>
                        <th>Montant</th>
                        <th>Remise</th>
                        <th>Devise</th>
                        <th>Date de Création</th>
                    </tr>
                    <tr>
                        <td>{{ $detail->article_libelle }}</td>
                        <td>{{ $detail->montant }}</td>
                        <td>{{ $detail->remise }}</td>
                        <td>{{ $detail->devise }}</td>
                        <td>{{ $detail->article_date_creation }}</td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <h2>Contrat</h2>
                <table class="table">
                    <tr>
                        <th>N° Contrat</th>
                        <th>Status</th>
                        <th>Version</th>
                        <th>Type</th>
                        <th>Frequence Facturation</th>
                        <th>Date de Démarrage</th>
                        <th>Date de Création</th>
                    </tr>
                    <tr>
                        <td>{{ $detail->numero_contrat }}</td>
                        <td>{{ $detail->statut_contrat }}</td>
                        <td>{{ $detail->version_contrat }}</td>
                        <td>{{ $detail->type_contrat }}</td>
                        <td>{{ $detail->frequence_facturation }}</td>
                        <td>{{ $detail->date_demarrage }}</td>
                        <td>{{ $detail->date_creation }}</td>
                    </tr>
                </table>
            </div>
            <div class="row">
                <h2>Contact</h2>
                <table class="table">
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Adresse</th>
                        <th>CIN</th>
                        <th>Role</th>
                    </tr>
                    <tr>
                        <td>{{ $detail->contact_nom }}</td>
                        <td>{{ $detail->contact_prenom }}</td>
                        <td>{{ $detail->contact_adresse }}</td>
                        <td>{{ $detail->cin }}</td>
                        <td>{{ $detail->role }}</td>
                    </tr>
                </table>
        @endforeach
        @endif
    </div>
    </div>
</body>

</html>
