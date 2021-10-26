<?php

$to = 'dmitriymal777@yandex.by';

$subject = 'ЗАЯВКА-Займы онлайн';


$msg .= 'Сумма займа: '.$_POST['Сумма']."\r\n";
$msg .= 'Имя: '.$_POST['Имя']."\r\n";
$msg .= 'Населенный пункт: '.$_POST['siti']."\r\n";
$msg .= 'Телефон: '.$_POST['Телефон']."\r\n";
$msg .= 'Страница: '.$_POST['Страница']."\r\n";
$msg .= 'Форма: '.$_POST['Форма']."\r\n";
mail($to,$subject,$msg);

echo 'success';

?>