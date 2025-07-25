<?php

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

                        <?php
                            $is_parking = isSet($_GET["parking"]) == true ? $_GET["parking"] : "false";
                            var_dump($is_parking);
                        ?>

                        <div class="mb-3">
                            <div class="form-check">
                                <?php
                                    // $input_el = $is_parking == "true" ? '<input name="parking" class="form-check-input" type="checkbox" value="true" id="parking" checked>' : '<input name="parking" class="form-check-input" type="checkbox" value="true" id="parking">';

                                    // echo $input_el;



                                    $input_el = '<input name="parking" class="form-check-input aaa" type="checkbox" value="true" id="parking" ';
                                    $input_el .= $is_parking == "true" ? 'checked>' : '>';

                                    echo $input_el;


                                    // // NON FUNZIONA
                                    // $input_el = '<input name="parking" class="form-check-input aaa" type="checkbox" ';
                                    // $input_el .= $is_parking == "true" ? 'value="true" ' : '';
                                    // $input_el .= 'id="parking" ';
                                    // $input_el .= $is_parking == "true" ? 'checked>' : '>';

                                    // echo $input_el;
                                ?>
                                
                                
                                <label class="form-check-label" for="parking">
                                    Parking
                                </label>
                            </div>
                        </div>


                        <button action="http://localhost:8080/boolean/esercizi/php-hotel/" type="submit" class="btn btn-primary">Submit</button>
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
                                    echo "<tr>";
                                    foreach ($hotel as $key => $value) {
                                        echo "<td>";
                                        echo $value;
                                        echo "</td>";
                                    };
                                    echo "</tr>";
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