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
</head>
<body>


    <table>
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


    
</body>
</html>