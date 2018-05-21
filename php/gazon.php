<?php

    if (htmlentities(strip_tags($_POST['valTrFal']))!='valTrFal_true' || htmlentities(strip_tags($_POST['lName']))!='' ) {
        echo 'false';
    }
    else {
        $name = htmlentities(strip_tags($_POST['name']));
        $phone = htmlentities(strip_tags($_POST['phone']));
        $fieldSize = htmlentities(strip_tags($_POST['size']));
        $txtorder= htmlentities(strip_tags($_POST['txtservice']));
    $mail_message = '
    <html>
    <head>
        <title>Заявка</title>
    </head>
    <body>
        <h2>Заказ</h2>
        <ul>
            <li>Имя: ' . $name . '</li>
            <li>Телефон: ' . $phone . '</li>
            <li>Размер участка: ' . $fieldSize . '</li>
            <li>Заинтересовала услуга: ' . $txtorder . '</li>
        </ul>
    </body>
    </html>';

    $headers = "From: <https://www.ld63.ru/>\r\n".
                "MIME-Version: 1.0" . "\r\n" .
                "Content-type: text/html; charset=UTF-8" . "\r\n";

//* далее вместо "your_email" укажите свой почтовый ящик, на 
//* который будут пересылаться заявки от заказчиков с сайта
    $mail = mail('your_email', 'Заказ', $mail_message, $headers);

    if ($mail) {
        echo 'ok';
    }
    else
    {
        echo 'none';
    }
    }
?>