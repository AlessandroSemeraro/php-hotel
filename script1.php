<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prova-php-array</title>
</head>
<body>
    <?php 
    $hotel = [
        'Hotel Lustrios',
        'Hotel Debenedictis',
        'Hotel Eccellenza',
        
    ];
    
    $hotel [] = 'Hotel Lusso';

    echo $hotel[3];

    var_dump($hotel);

    $hotels = [
        'name1'=>'Hotel Lustrios',
        'name2'=>'Hotel Debenedictis',
        'name3'=>'Hotel Eccellenza',
 
    ];
    
    $hotels['name4']='hotel Lume';

    echo $hotels['name4'];

    var_dump($hotels);
    
    ?>
</body>
</html>