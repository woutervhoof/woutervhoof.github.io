<?php
$from = $_POST["van"];
$msg = $_POST["bericht"];
$vanNaam = $_POST["vanNaam"];


  $to = 'woutervanhoof2000@gmail.com';
  $subject = 'Entry contactformulier site';

  $message = '
    <html>
    <body>
      <p><i>Een nieuw bericht van <b>'.$vanNaam.'</b>:</i><br><br></p>
      <p>'.nl2br($msg).'</p>
      <p><br><br><i>Bericht via contactformulier van <b>'.$from.'</b></i><br></p>
    </body>
    </html>
    ';

  // To send HTML mail, the Content-type header must be set
  $headers[] = 'MIME-Version: 1.0';
  $headers[] = 'Content-type: text/html; charset=iso-8859-1';
  $headers[] = 'X-Mailer: PHP/' . phpversion();
  // Additional headers
  $headers[] = 'To: '.$to;
  $headers[] = 'From: '.$from;
  $headers[] = 'Reply-To: '.$from;


  mail($to, $subject, $message, implode("\r\n", $headers));

 ?>
