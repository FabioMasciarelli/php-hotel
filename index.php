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
    ]
];

$parking_choise = $_GET['parking'] ?? null;
$display = 'block';
$star_valutation = $_GET['stars'] ?? null;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>


    <h3>Filtra parcheggio e valutazione</h3>

    <form action="index.php" method="GET">
        <select name="parking">
            <option value="true">si</option>
            <option value="false">no</option>
        </select>
        <select name="stars">
            <option value="1">1 star</option>
            <option value="2">2 stars</option>
            <option value="3">3 stars</option>
            <option value="4">4 stars</option>
            <option value="5">5 stars</option>
        </select>
        <button type="submit">Invia</button>
    </form>

    <?php foreach ($hotels as $cur_hotel) { ?>
        <?php if ($parking_choise == $cur_hotel['parking']) { ?>
            <div class="container">
                <div class="card">
                    <h2><?php echo $cur_hotel['name'] ?></h2>
                    <p>Description<?php echo $cur_hotel['description'] ?></p>
                    <h4>Voto:<?php echo $cur_hotel['vote'] ?></h4>
                    <h4>Parking: <?php echo $cur_hotel['parking'] ?></h4>
                    <h5>Distance:<?php echo $cur_hotel['distance_to_center'] ?></h5>
                </div>
            </div>
        <?php } ?>
    <?php } ?>

</body>

</html>