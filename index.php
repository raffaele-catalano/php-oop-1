<?php

require_once __DIR__ . '/models/Movie.php';
// require_once __DIR__ . '/models/Category-Bonus.php';

$moviesList = [
    new Movie('The Lord of the Rings',       'Fantasy',  178, 2001, 9.8, new CategoryBonus('Dramatic')),
    new Movie('Forrest Gump',                'Dramatic', 142, 1994, 9.9, new CategoryBonus('Sentimental')),
    new Movie('The Exorcism of Emily Rose',  'Horror',   119, 2005, 4.4),
    new Movie('Mad Max - Fury Road',         'Action',   120, 2015, 7.5, new CategoryBonus('Thriller')),
    new Movie('Shawshank Redemption',        'Dramatic', 142, 1994, 9.5),
    new Movie('Inception',                   'Sci-Fi',   148, 2010, 7.5, new CategoryBonus('Action')),
];



// var_dump($moviesList);

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
    <div class="container p-4 text-light">
        <h1 class="text-center fw-bold mb-4">Movies</h1>

        <table class="table text-light">
            <thead>
                <tr class="text-warning text-uppercase">
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Other Category</th>
                    <th scope="col">Length</th>
                    <th scope="col">Release Year</th>
                    <th scope="col">Average Vote</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($moviesList as $movie) : ?>
                <tr>
                    <th scope="row"><?php echo $movie->title ?></th>
                    <td><?php echo $movie->category ?></td>
                    <td><?php echo $movie->otherCategory->otherCategory ?? '---' ?></td>
                    <td><small><em><?php echo $movie->length?></em></small></td>
                    <td><?php echo $movie->releaseYear ?></td>
                    <td><?php echo $movie->averageVote ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>