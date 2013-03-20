<?php
header('content-type: application/json; charset=utf-8');

if (isset($_GET["name"])) {
        $name = strip_tags($_GET['name']);
        $email = strip_tags($_GET['email']);
        $telefon = strip_tags($_GET['telefon']);
        $artanfrage = strip_tags($_GET['artanfrage']);
        $anfrage = strip_tags($_GET['anfrage']);
        $anreisetag = strip_tags($_GET['anreisetag']);
        $anreisemonat = strip_tags($_GET['anreisemonat']);
        $anreisejahr = strip_tags($_GET['anreisejahr']);
        $naechte = strip_tags($_GET['naechte']);
        $zimmerart = strip_tags($_GET['zimmerart']);
        $header = "Von: ". name . " <" . $email . ">rn";

        $empfaenger = 'prisi@aon.at';
        $titel = 'Das Kontaktformular wurde ausgeführt';
        $mailtext = "
        Name: $name
        E-Mail: $email
        Telefon: $telefon
        Art der Anfrage: $artanfrage
        Anfrage: $anfrage
        Anreisetag: $anreisetag
        Anreisemonat: $anreisemonat
        Anreisejahr: $anreisejahr
        Nächte: $naechte
        Zimmerart: $zimmerart
        ";
        $result = 'success';

        if (mail($empfaenger, $titel, $mailtext, $header)) {
                echo json_encode($result);
        }
}
?>