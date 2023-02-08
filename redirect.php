<?php
// apro la sessione
session_start();
// controllo se mi è arrivato il messaggio
if (!empty($_SESSION['message'])) {
    $message = $_SESSION['message'];
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password</title>
</head>

<body>
    <main>
        <div> La tua password è: <?= $message ?> </div>
    </main>
</body>

</html>