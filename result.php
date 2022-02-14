<?php
include 'Comparable.php';
include 'Isport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';

if (isset($_GET["idClub"]) || isset($_POST["club"]) ) {
    if (isset($_GET["idClub"])){
        $idClub = $_GET["idClub"];
    } else {
        $idClub = $_POST["îdClub"];
    }
    echo "<br>Club" . $club[$_GET["id"]]->getNomClub() . "<br>";

    $listSport = $club[$idClub]->getLesSports();

    foreach ($club[$_GET["id"]]->getLesSports() as $keySport => $valueSport) {
        echo "-".$valueSport->getNomSport() . "<br>";
    }
}

var_dump($_POST);
echo "<br> <a href='/index.php'>Retour</a>";
