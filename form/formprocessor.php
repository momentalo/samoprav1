<?php
 
$emailSubject = "Новая заявка с вашего сайта!";
 
$emailBody = "\n\nЗаявка с сайта:\n\n";
$headers = 'From: ZAKAZ S SAITA <Номер 1>' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
foreach($_POST['fields'] as $key => $val)
{
	$emailBody .= "$key\n$val\n\n";
}
 
$emailBody .="Заполнена форма: " . $_POST["name"] ."\r\n"; 
 

 
 
$resultOfMail = mail("samoprav@gmail.com", $emailSubject, $emailBody, $headers);

 
if ($resultOfMail) {
	echo '{"success":true}';
} else {
	echo '{"success":false}';	
}
?>