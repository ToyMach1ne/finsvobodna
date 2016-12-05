<?php
$name = $_GET['name'];
$phone = $_GET['phone'];
$plan = $_GET['plan'];

if($_GET['email']) { $email = $_GET['email'];
$text='<b>Контактные данные<br />Имя:</b> '.$name.'<br /><b>Электронный адрес:</b> '.$email.'<br /><b>Телефон:</b> '.$phone;
}
else $text='<b>Контактные данные<br />Имя:</b> '.$name.'<br /><b>Телефон:</b> '.$phone;
 
 

$email = "info@iljakorovin.ru"; //Здесь прописать свой e-mail
$subject = 'ЗАКАЗ c сайта http://iljakorovin.ru/kurs1/';

//$text = "=?utf-8?b?" . base64_encode($text) . "?=";
$subject = "=?utf-8?b?" . base64_encode($subject) . "?=";
$headers = "From: admin \r\n";
$headers .= "Mime-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
mail ($email, $subject, $text, $headers); 
      
echo 1;

?>