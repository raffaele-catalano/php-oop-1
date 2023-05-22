<?php

require_once __DIR__ . '/models/Movie.php';
// require_once __DIR__ . '/models/Category-Bonus.php';

require_once __DIR__ . '/data/db.php'



// var_dump($moviesList);

?>

<?php 

include_once __DIR__ . '/partials/head.php'

?>

<body class="bg-dark">
    <div class="container p-4 text-light">
        <h1 class="text-center fw-bold mb-4">Movies</h1>

        <table class="table text-light">
            <thead>
                <tr class="text-warning text-uppercase">
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Other Category</th>
                    <th scope="col">Duration</th>
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
                    <td><small><em><?php echo $movie->duration?></em></small></td>
                    <td><?php echo $movie->releaseYear ?></td>
                    <td><?php echo $movie->averageVote ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>