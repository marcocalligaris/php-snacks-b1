<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”; -->
<?php
$name = $_GET['name'] ?? '';
$mail = $_GET['mail'] ?? '';
$age = $_GET['age'] ?? '';

$is_age_valid = is_numeric($age);
$is_name_valid = mb_strlen($name) > 3;
$is_email_valid = strpos($mail, '@') && strpos($mail, '.');


if (!$is_age_valid || !$is_name_valid || $is_email_valid) {
    echo 'Accesso negato';
} else {
    echo 'Accesso riuscito';
};
?>