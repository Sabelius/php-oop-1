<?php

require_once __DIR__ . "/movie-logic/index.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie oop</title>
</head>

<body>
    <div>
        <section>
            <?php foreach ($movies as $movie) { ?>
                <h1><?php echo $movie->stampatitolo() ?></h1>
                <address>
                    <h3><?php echo $movie->regista ?></h3>
                </address>
                <h3><?php echo $movie->dataUscita ?></h3>
                <h4><?php echo $movie->minutaggio ?> min</h4>
                <h4><?php echo $movie->tipoFilm() ?></h4>
                <h4><?php echo $movie->stampaVersione() ?></h4>
                <p><?php echo $movie->stampaTrama() ?></p>
            <?php } ?>
        </section>
    </div>
</body>

</html>