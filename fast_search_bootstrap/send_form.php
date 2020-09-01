<?php

$sendto   = "dkonononko@gmail.com";
$username = $_POST['name'];
$usermail = $_POST['email'];
$usermessage = $_POST['phone'];

// Формирование заголовка письма
$subject  = "Сообщение с сайта";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Казбек</h2>\r\n";
$msg .= "<p><strong>Ім'я:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Email:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Номер телефону:</strong> ".$usermessage."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
    echo "
        <html><body>
        <div style='width: 90%;text-align: center;color: #3d3d3d;font-family: Open Sans,sans-serif;display:block;margin: auto;padding-top: 10%;'>
            <p style='display:block; font-size: 24px;font-weight: bold;line-height: 1.3;'>Ваша заявка успішно відправлена!</p>
            <p style='margin: 25px auto 40px;display:block; font-size: 18px;font-weight: bold;line-height: 1.3;'>Ми зателефонуємо Вам найближчим часом :)</p>
            <a href='index.html' style='text-decoration:none;font-weight: bold;display: block;width: 240px;margin: auto;color: #fff;font-size: 16px;text-transform: uppercase;border-radius: 4px;text-align: center;height: 40px;line-height: 40px;background: #F6BF27'>На головну сторінку</a>
        </div>
        </body></html>
    ";
} else {
    echo "
        <html><body>
        <div style='width: 90%;text-align: center;color: #3d3d3d;font-family: Open Sans,sans-serif;display:block;margin: auto;padding-top: 10%;'>
            <p style='display:block; font-size: 24px;font-weight: bold;line-height: 1.3;'>Технічна помилка!</p>
            <p style='margin: 25px auto 40px;display:block; font-size: 18px;font-weight: bold;line-height: 1.3;'>Спробуйте відправити заявку ще раз.</p>
            <a href='index.html' style='text-decoration:none;font-weight: bold;display: block;width: 240px;margin: auto;color: #fff;font-size: 16px;text-transform: uppercase;border-radius: 4px;text-align: center;height: 40px;line-height: 40px;background: #F6BF27'>На головну сторінку</a>
        </div>
        </body></html>
    ";
}

?>
