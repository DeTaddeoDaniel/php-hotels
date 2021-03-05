<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio hotel filter</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container" id="app">
        
        <div class="header">
            <h1>Esercizio php database hotel</h1>
        </div>

        <div class="fiter">
            <form action="php/filter.php" method="get">

                <div>
                    <span>Cerca per nome</span>
                    <input type="text" name="name" placeholder="Cerca per nome" @input="reflesh" v-model="search_name">
                </div>

                <div>
                    <span>Disponibilita parcheggio</span>
                    <select name="parking" @change="reflesh" v-model="search_parking">
                        <option value="true">Parcheggio Presente</option>
                        <option value="all">Tutti</option>
                    </select>
                </div>

                <div>
                    <span>Voto in stelle</span>
                    <select name="vote" @change="reflesh" v-model="search_vote">
                        <option value="2">2 stelle</option>
                        <option value="3">3 stelle</option>
                        <option value="4">4 stelle</option>
                        <option value="5">5 stelle</option>
                        <option value="all" selected>Tutti</option>
                    </select>
                </div>

                <div>
                    <span>Distanza dal centro</span>
                    <select name="distance" @change="reflesh" v-model="search_distance">
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
                <span>Risultati trovati: </span>
                <span><?php #echo count($hotelsFiltrati); ?></span>
                <span>{{hotelFiltrati.length}}</span>
            </p>

            <ul>

                <!-- <?php #foreach($hotelsFiltrati as $hotel){ ?> -->
                    <li class="card" v-for="hotel in hotelFiltrati">
                        <div>
                            
                            <p>
                                <span class="bold">Nome: </span>
                                <?php #echo $hotel['name'] ?>
                                <span>{{hotel.name}}</span>
                            </p>
                            
                            <p>
                                <span class="bold">Descrizione: </span>
                                <?php #echo $hotel['description'] ?>
                                <span>{{hotel.description}}</span>
                            </p>
                            
                            <p>
                                <span class="bold">Parcheggio: </span>
                                <?php #echo $hotel['parking'] ?>
                                <span>{{hotel.parking}}</span>
                            </p>
                            
                            <p>
                                <span class="bold">Voto stelle minimo: </span>
                                <?php #echo $hotel['vote'] ?>
                                <span>{{hotel.vote}}</span>
                            </p>
                            
                            <p>
                                <span class="bold">Distanza dal centro: </span>
                                <?php #echo $hotel['distance_to_center'] ?>
                                <span>{{hotel.distance_to_center}}</span>
                            </p>
                        
                        </div>
                    </li>

                    <li v-if="hotelFiltrati.length == 0">
                        <h3>Non sono disponibili hotel per la tua ricerca</h3>
                    </li>
                <?php #} ?>
            </ul>

        </div>

    </div>

    <script src="index.js"></script>
</body>

</html>