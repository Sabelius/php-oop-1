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
            <h1><?php echo $LOTR-> titolo() ?></h1>
            <h3><?php echo $LOTR-> regista ?></h3>
            <h3><?php echo $LOTR-> dataUscita ?></h3>
            <h4><?php echo $LOTR-> minutaggio ?> min</h4>
            <h4><?php echo $LOTR-> versione() ?></h4>
            <p><?php echo $LOTR-> trama ?></p>
        </section>
    </div>

    <div>
        <section>
            <h1><?php echo $LOTR2-> titolo() ?></h1>
            <h3><?php echo $LOTR2-> regista ?></h3>
            <h3><?php echo $LOTR2-> dataUscita ?></h3>
            <h4><?php echo $LOTR2-> minutaggio ?> min</h4>
            <h4><?php echo $LOTR2-> versione() ?></h4>
            <p><?php echo $LOTR2-> trama ?></p>
        </section>
    </div>

    <div>
        <section>
            <h1><?php echo $LOTR3-> titolo() ?></h1>
            <h3><?php echo $LOTR3-> regista ?></h3>
            <h3><?php echo $LOTR3-> dataUscita ?></h3>
            <h4><?php echo $LOTR3-> minutaggio ?> min</h4>
            <h4><?php echo $LOTR3-> versione() ?></h4>
            <p><?php echo $LOTR3-> trama ?></p>
        </section>
    </div>
 
    
</body>
</html>