<?php
// creo array
$characters = 'a b c d e f g h i l m n o p q r s t u v z w y j k x ! £ $ % & / ( ) = ? ^ 1 2 3 4 5 6 7 8 9 0 A B C D E F G H I L M N O P Q R S T U V Z Y J K X';
// divido stringa
$characters = explode(' ', $characters);
// mischio elementi dell'array
shuffle($characters);

// creo funzione che genera password
function getRandomPassword($characters, $length)
{
    $password = '';
    do {
        // prendo un carattere dall'array
        $random_character = next($characters);
        // monto stringa
        $password .= $random_character;
    } while (strlen($password) < $length);
    return $password;
};

// se esiste una chiave 'length'
if (!empty($_GET['length'])) {
    $length = $_GET['length'];
    // chiamo funzione che genera password
    $message = getRandomPassword($characters, $length);
    // apro sessione
    session_start();
    $_SESSION['message'] = $message;
    // redirect
    header('Location: redirect.php');
}
