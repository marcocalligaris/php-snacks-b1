<?php 
$matches = [
    [
    'host' => 'Venezia',
    'guest' => 'Fortitudo Bologna',
    'host_score' => '83',
    'guest_score' => '70',
    ],
    [
    'host' => 'Napoli',
    'guest' => 'Universo Treviso',
    'host_score' => '58',
    'guest_score' => '68',
    ],
    [
    'host' => 'Trento',
    'guest' => 'Trieste',
    'host_score' => '83',
    'guest_score' => '94',
    ],
    [
    'host' => 'Dinamo Sassari',
    'guest' => 'Cremona',
    'host_score' => '83',
    'guest_score' => '74',
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <ul>
        <?php for($i = 0; $i < count($matches); $i++) { ?>
        <li><?= $matches[$i]['host'] ?> - <?= $matches[$i]['guest'] ?> | <?= $matches[$i]['host_score'] ?> - <?= $matches[$i]['guest_score'] ?></li>
        <?php } ?>
    </ul>
</body>
</html>

