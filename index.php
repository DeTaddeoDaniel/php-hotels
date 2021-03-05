<?php
    include 'php/database.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio hotel filter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        
        <div class="header">
            <h1>Esercizio php database hotel</h1>
        </div>

        <div class="fiter">
        
        </div>

        <div class="main">

            <p>
                <span>Risultati trovati:</span>
                <span><?php echo count($hotels); ?></span>
            </p>

            <ul>

                <?php foreach($hotels as $hotel){ ?>
                    <li class="card">
                        <div>
                            
                            <p>
                                <span class="bold">Nome: </span>
                                <?php echo $hotel['name'] ?>
                            </p>
                            
                            <p>
                                <span class="bold">Descrizione: </span>
                                <?php echo $hotel['description'] ?>
                            </p>
                            
                            <p>
                                <span class="bold">Parcheggio: </span>
                                <?php echo $hotel['parking'] ?>
                            </p>
                            
                            <p>
                                <span class="bold">Voto: </span>
                                <?php echo $hotel['vote'] ?>
                            </p>
                            
                            <p>
                                <span class="bold">Distanza dal centro: </span>
                                <?php echo $hotel['distance_to_center'] ?>
                            </p>
                        
                        </div>
                    </li>
                <?php } ?>
            </ul>

        </div>

    </div>
</body>

</html>