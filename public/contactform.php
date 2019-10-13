<?php

if (isset($_POST['submit'])) {
    $naam = $_POST['naam'];
    $mail = $_POST['mail'];
    $straat = $_POST['straat'];
    $wijk = $_POST['wijk'];
    $plaats = $_POST['plaats'];
    $onderwerp = $_POST['onderwerp'];
    $bericht = $_POST['bericht'];

    $mailTo = "";
    $headers = "Van: ".$mailFrom;
    $txt = "U hebt een nieuw bericht ontvangen van "$naam.".\n\n".$bericht;

    mail($mailTo, $onderwerp, $txt, $headers);
    header("Location: index.php?mailSend");
}

