<?php

require_once __DIR__ . '/models/Movie.php';

$moviesList = [
    new Movie('Il Signore degli Anelli',     'Fantasy', 180, 2000, 10),
    new Movie('The Exorcism of Emily Rose',  'Horror',  120, 1989, 4),
    new Movie('Mad Max - Fury Road',         'Action',  140, 2010, 7),
];



var_dump($moviesList);

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.css' integrity='sha512-bR79Bg78Wmn33N5nvkEyg66hNg+xF/Q8NA8YABbj+4sBngYhv9P8eum19hdjYcY7vXk/vRkhM3v/ZndtgEXRWw==' crossorigin='anonymous'/>
    <!-- Font Awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.css' integrity='sha512-Z0kTB03S7BU+JFU0nw9mjSBcRnZm2Bvm0tzOX9/OuOuz01XQfOpa0w/N9u6Jf2f1OAdegdIPWZ9nIZZ+keEvBw==' crossorigin='anonymous'/>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/movie_favic.png" type="png">
    <title>Movies</title>
</head>

<body class="bg-dark">

</body>
</html>