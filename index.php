<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5">
        <div class="row row-cols-4">
            <form method="GET">
                <label for="lunghezza_password" class="mx-2">Scegli lunghezza password:</label>
                <div class="col input-group mb-3">
                    <input type="number" class="form-control" id="lunghezza_password" name="lunghezza_password" placeholder="lunghezza password" min="5" max="10">
                    <button class="btn btn-secondary btn-outline-warning" type="submit">Invia</button>
                </div>
            </form>
        </div>


        <div> 
            <div class="mt-5">La password consigliata è:</div>

            <?php include __DIR__ . "/functions.php" ?>
        </div>
    </div>
    
</body>
</html>

<!-- Milestone 1
Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all'utente.
Scriviamo tutto (logica e layout) in un unico file *index.php*  -->

