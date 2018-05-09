<?php

//проверяем значения полученые при проверке скриптом формы
if (trim($_POST['valTrFal'])!='valTrFal_true') {
	echo 'false';
}
else {
 	$name = trim($_POST['name']);
	$phone = trim($_POST['phone']);
 	$txtorder= trim($_POST['txtservice']);
 
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
            <li>Заинтересовала услуга: ' . $txtorder . '</li>
        </ul>
    </body>
    </html>';

    $headers = "From: <https://www.ld63.ru/>\r\n".
                "MIME-Version: 1.0" . "\r\n" .
                "Content-type: text/html; charset=UTF-8" . "\r\n";

    $mail = mail('webportfolio2018@gmail.com', 'Заказ', $mail_message, $headers);

    if ($mail) {
        echo 'ok';
    }
    else
    {
        echo 'none';
    }
    }
?>