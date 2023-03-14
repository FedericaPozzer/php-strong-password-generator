<!-- Milestone 2
Verificato il corretto funzionamento del nostro codice, spostiamo la logica in un file *functions.php* che includeremo poi nella pagina principale -->
<!-- <h1 class="text-success mt-5">"include" ok!</h1> -->

<?php
if (!empty($_GET)) {
    $lunghezza = $_GET["lunghezza_password"];
    // var_dump($lunghezza);

    function randomPassword($lunghezza) {
    $alphabet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?$%";
    $pass = array();
    $alphaLength = strlen($alphabet) - 1; 
            
    for ($i = 0; $i < $lunghezza; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
    }

    $generatedPassword = randomPassword($lunghezza);
?>

<div> <?php echo $generatedPassword ?> </div>

<?php } ?>

<?php
// session_start()
// $_SESSION["new_password"] = $generatedPassword;
?>