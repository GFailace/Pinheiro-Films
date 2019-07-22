<?php     
$to_email = 'pinheirofilms@gmail.com';
$subject = 'Email do Site';
$message = $_POST['message'];
$headers = 'From: pinheirofilms@gmail.com';
mail($to_email,$subject,$message,$headers);
?>