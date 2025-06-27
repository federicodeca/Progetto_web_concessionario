<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">Patenti Da Verificare</h2>


    <table class="table table-bordered table-hover align-middle text-center">
        <thead class="table-dark">
            <tr>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Email</th>
                <th>Data Scadenza</th>
                <th>Immagine Patente</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$licenses item=license}
                <tr>
                    <td>{$license->getUserId()->getFirstname()}</td>
                    <td>{$license->getUserId()->getLastname()}</td>
                    <td>{$license->getUserId()->getEmail()}</td>
                    <td>{$license->getExp()->format("Y/m/d")}</td>
                    <td>
                        {if $license->getPhoto()}
                            <img src="data:{$license->getPhoto()->getType()};base64,{$license->getPhoto()->getEncodedData()}" alt="patente" class="img-fluid" />

                        {else}
                            <em>Nessuna immagine</em>
                        {/if}
                    </td>
                    <td>
                        <a href="/WebApp/Admin/checkLicense/{$license->getIdLicense()}" 
                           class="btn btn-primary btn-lg btn-block">
                           Accetta
                        </a>
                    </td>
                </tr>
            {/foreach}
        </tbody>
    </table>

</div>

</body>
</html>
