<?php
 $to      = 'yann92310@hotmail.com';
 $subject = 'le sujet';
 $message = 'Bonjour !';
 $headers = 'From: webmaster@example.com';

 mail($to, $subject, $message, $headers);
