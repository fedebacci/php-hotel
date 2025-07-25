<?php

    // # PRIMARY RESOURCE

    // * Default Hotels
    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];
    // var_dump($hotels);





    // # $_GET
    // var_dump($_GET);

    // * $is_parking (if checkbox)
    // Se presente indica che sto filtrando solo per parcheggio presente
    $is_parking = isSet($_GET["parking"]) == true ? $_GET["parking"] : "false";
    // var_dump($is_parking);

    // // * $is_parking (if select) - For Fun e per vedere funzionamento delle select
    // // Se presente indica che sto filtrando solo per parcheggio presente
    // $is_parking = isSet($_GET["parking"]);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Esercizio 1: "EX - PHP Hotel" (L02 - PHP Fundamentals)
    </title>

    <!-- # BOOTSTRAP 5.3.7 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form>

                        <!-- * $is_parking (if checkbox)  -->
                        <div class="mb-3">
                            <div class="form-check">
                                <?php
                                    $input_el = '<input name="parking" class="form-check-input aaa" type="checkbox" value="true" id="parking" ';
                                    $input_el .= $is_parking == "true" ? 'checked>' : '>';

                                    echo $input_el;
                                ?>
                                
                                
                                <label class="form-check-label" for="parking">
                                    Parking
                                </label>
                            </div>
                        </div>


                        <!-- * $is_parking (if select) - For Fun e per vedere funzionamento delle select  -->
                        <!-- <div class="mb-3">
                            <label for="parking_filter_select" class="form-label">
                                Parking filter select menu
                            </label>
                            <select name="parking" id="parking_filter_select" class="form-select" aria-label="Default select example">
                                <option value="" selected>
                                    Select filter
                                </option>
                                <option value="true">
                                    With parking (True)
                                </option>
                                <option value="false">
                                    No parking (False)
                                </option>
                            </select>
                        </div> -->


                        <button action="http://localhost:8080/boolean/esercizi/php-hotel/" type="submit" class="btn btn-primary">
                            Submit filters
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <?php
                                    foreach ($hotels[0] as $key => $value) {
                                        echo "<th>";
                                        echo $key;
                                        echo "</th>";
                                    };
                                ?>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($hotels as $hotel) {
                                    if ($is_parking == "false" || ($is_parking == "true" && $hotel["parking"] == true)) {
                                        echo "<tr>";
                                        foreach ($hotel as $key => $value) {
                                            echo "<td>";
                                            echo $value;
                                            echo "</td>";
                                        };
                                        echo "</tr>";
                                    };
                                };
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>


    <!-- # BOOTSTRAP 5.3.7 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>