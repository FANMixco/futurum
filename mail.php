<?php


$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];

$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];

$dokogo = "dawid@wykreowani.pl";
$tytul = "Formularz kontaktowy - futurum";

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
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index.html\">";
}
?>
