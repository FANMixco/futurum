<?php


$first_name = $_POST['imie'];
$last_name = $_POST['nazwisko'];

$email = $_POST['email'];
$telefon = $_POST['telefon'];
$message = $_POST['message'];

$dokogo = "dawid@wykreowani.pl";
$tytul = "Formularz kontaktowy - autoserwisbeta.pl";

$wiadomosc = "";
$wiadomosc .= "Imię: " . $first_name . "\n \n";
$wiadomosc .= "Nazwisko: " . $last_name . "\n \n";
$wiadomosc .= "Email: " . $email . "\n \n";
$wiadomosc .= "Website: " . $website . "\n \n";
$wiadomosc .= "Wiadomość: \n" . $message . "\n \n";

$naglowek = "";
$naglowek .= "Od:" . $odkogo . " \n";
$naglowek .= "Content-Type:text/plain;charset=utf-8";

$sukces = mail($dokogo, $tytul, $wiadomosc, $naglowek);

if ($sukces){
  print "<meta http-equiv=\"refresh\" content=\"0;\">";
}
?>
