<?php



$to = 'yurygoof@yandex.by';

$subject = 'ЗАЯВКА';

$msg .= 'Какая сумма нужна?: '.$_POST['111']."\r\n";
$msg .= 'На какой срок?: '.$_POST['222']."\r\n";
$msg .= 'Работаете ли вы сейчас?: '.$_POST['333']."\r\n";
$msg .= 'Есть ли у Вас сейчас просрочки?: '.$_POST['444']."\r\n";
$msg .= 'Телефон: '.$_POST['555']."\r\n";

mail($to,$subject,$msg,"Content-type:text/plain;charset=utf-8\r\n");



echo '{"res":"1","id_lead":"18923585","key":"877d5e422f752184","lead":"18923585"}';

?>



