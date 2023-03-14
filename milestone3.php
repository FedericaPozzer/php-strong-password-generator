<!-- Milestone 3 (BONUS)
Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $_SESSION recupererà la password da mostrare all'utente. -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wow!</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-5">
        <h2 class="text-success">Complimenti, hai generato una nuova password!</h2>
        <?php session_start() ?>
        <h3>la nuova password è: . <?php echo $_SESSION["new_password"] ?> </h3>

        <button class="btn btn-outline-primary mt-5" type="submit">
            <a href="http://localhost:8888/Boolean/2023-03-13/php-strong-password-generator/kill.php">Torna al Password Generator</a>
            <?php
            // session_start() 
            // session_destroy() 
            ?>
        </button>
    </div>
    
</body>
</html>