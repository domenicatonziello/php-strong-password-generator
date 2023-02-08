<?php 
// creo array
$characters = ['a','b','c','d','e','f','g','h','i','l','m','n','o','p','q','r','s','t','u','v','z'];

// creo funzione che genera password
function getRandomPassword($characters,$length){
    $password = '';
    do{
        $random_character = array_rand($characters, 1);
        $password .= $random_character;
    }while ( strlen($password) < $length );
    return $password;
};

// se esiste una chiave 'length'
if (isset($_GET['length'])) {
    $length = $_GET['length'];
    // chiamo funzione che genera password
    getRandomPassword($characters,$length);
    var_dump(getRandomPassword($characters,$length));
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- style -->
    <link rel="stylesheet" href="style/style.css"> 
</head>
<body>
    <div class="container my-3">
        <!-- header -->
        <header class="text-center mb-5">
            <h1 class="text-secondary"> Strong Password Generator </h1>
            <h3 class="text-white">Genera una password sicura</h3>
        </header>
        <!-- main -->
        <main>
            <form action="#" method="GET">
                <div class="form-floating mb-3">
                    <input type="number" min="1" max="10" name="length" class="form-control" id="floatingInput" placeholder="Lunghezza Password">
                    <label for="floatingInput">Lunghezza Password</label>
                </div>
            </form>
        </main>
    </div>
</body>
</html>