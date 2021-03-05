<?php
    include 'php/database.php';
    include 'php/filter.php'
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio hotel filter</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
</head>

<body>
    <div class="container" id="app">
        
        <div class="header">
            <h1>Esercizio php database hotel</h1>
            <p>{{test}}</p>
        </div>

        <div class="fiter">
            <form action="php/filter.php" method="get">

                <div>
                    <span>Cerca per nome</span>
                    <input type="text" name="name" placeholder="Cerca per nome" @imput="reflesh">
                </div>

                <div>
                    <span>Disponibilita parcheggio</span>
                    <select name="parking">
                        <option value="true">Parcheggio Presente</option>
                        <option value="false">Parcheggio non presente</option>
                        <option value="all" selected>Tutti</option>
                    </select>
                </div>

                <div>
                    <span>Voto in stelle</span>
                    <select name="vote">
                        <option value="2">2 stelle</option>
                        <option value="3">3 stelle</option>
                        <option value="4">4 stelle</option>
                        <option value="5">5 stelle</option>
                        <option value="all" selected>Tutti</option>
                    </select>
                </div>

                <div>
                    <span>Distanza dal centro</span>
                    <select name="distance">
                        <option value="1">Meno 1 km</option>
                        <option value="3">Meno 3 km</option>
                        <option value="5">Meno 5 km</option>
                        <option value="10">Meno 10 km</option>
                        <option value="all" selected>Tutti</option>
                    </select>
                </div>

            </form>
        </div>

        <div class="main">

            <p>
                <span>Risultati trovati:</span>
                <span><?php echo count($hotelsFiltrati); ?></span>
            </p>

            <ul>

                <?php foreach($hotelsFiltrati as $hotel){ ?>
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

    <script src="index.js"></script>
</body>

</html>