<?php
include 'Comparable.php';
include 'Isport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallon.php';
include 'Club.php';
include 'data.php';

var_dump($_GET);


foreach ($club as $keyClub => $valueClub){
    echo '<a href="index.php?id='.$valueClub->getIdClub().'">' . $valueClub->getNomClub().'</a> <br>';
}
if ($_GET["id"]){
    echo "<br>Club" . $club[$_GET["id"]]->getNomClub()."<br>";
    foreach ($club[$_GET["id"]]->getLesSports() as $keySport => $valueSport){
        echo $valueSport->getNomSport()."<br>";
}

}