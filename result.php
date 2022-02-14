<?php
if ($_GET["id"]) {
    echo "<br>Club" . $club[$_GET["id"]]->getNomClub() . "<br>";
    foreach ($club[$_GET["id"]]->getLesSports() as $keySport => $valueSport) {
        echo $valueSport->getNomSport() . "<br>";
    }
}
