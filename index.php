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

//se è settato e $get [parking] è ==(stringa) a 1 allora è true else false 
$parkingFilter = (isset($_GET['parking'])) && $_GET['parking'] == 1 ? true : false;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BOOTSTRAP-->
    <link rel="stylesheet" link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>php-hotel</title>
</head>

<body>
    <ul>
        <?php foreach ($hotels as $hotel) { ?>
            <li>
                <?php foreach ($hotel as $key => $value) { ?>
                    <p>
                        <?php echo $key . ':' . $value; ?>
                    </p>
                <?php } ?>
            </li>
        <?php } ?>
    </ul>

    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Parking</th>
                <th>Vote</th>
                <th>Distance to center</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hotels as $hotel) { ?>
                <!--se l'hotel non ha il parcheggio e l' utente ha scelto il parcheggio allora non fare nulla ma in caso contrario fallo vedere-->
                <?php if ($hotel['parking'] === false && $parkingFilter === true) {
                } else { ?>

                    <tr>

                        <td> <?php echo $hotel['name']; ?> </td>

                        <td><?php echo $hotel['description']; ?> </td>

                        <td> <?php echo $hotel['parking']; ?> </td>

                        <td><?php echo $hotel['vote']; ?></td>

                        <td><?php echo $hotel['distance_to_center']; ?></td>

                    </tr>

            <?php }
            }
            ?>

        </tbody>
    </table>

    <div class="container">
        <div class="row">
            <form action="./index.php" method="GET">

                <select class="form-select mt-3" id="parking" name="parking" aria-label="Default select example">

                    <option selected value="2">Select parking</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>

                </select>

                <button type="submit" class="btn btn-warning my-3">invio</button>

            </form>
        </div>
    </div>





</body>

</html>