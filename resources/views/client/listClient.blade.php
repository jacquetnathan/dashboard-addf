<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard ADDF</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="card">
    <header class="card-header">
        <p class="card-header-title">Clients</p>
    </header>
    <div class="card-content">
        <div class="content">
            <table class="table is-hoverable">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nom du Client</th>
                </tr>
                </thead>
                <tbody>
                @foreach($clients as $client)
                    <tr>
                        <td>{{ $client->idClient }}</td>
                        <td><strong>{{ $client->clientName }}</strong></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
