<?php
include 'Comparable.php';
include 'Isport.php';
include 'sport.php';
include 'SportRelais.php';
include 'SportBallons.php';
include 'Club.php';

echo "Projet Heritage et Interface<br>";

$listClub[1] = new Club(1, "PSG", 234);
$listClub[2] = new Club(2,"Lyon", 23);
$listClub[3] = new Club(3,"Saint Etienne", 345);
//--------------------------------------------------------------------------//
$listClub[1]->AjouterSport(new SportRelais(nomSport: "4x100", nbJoueurs: 1, distance: 400));
$listClub[1]->AjouterSport(new SportBallons(nomSport: "Basket", nbJoueurs: 8, longueur: 20, largeur: 30));
$listClub[1]->AjouterSport(new Sport(nomSport: "football",nbJoueurs: 11));

$listClub[2]->AjouterSport(new SportRelais(nomSport: "100", nbJoueurs: 1, distance: 100));
$listClub[2]->AjouterSport(new SportBallons(nomSport: "Handball", nbJoueurs: 8, longueur: 40, largeur: 50));
$listClub[2]->AjouterSport(new Sport(nomSport: "VTT", nbJoueurs: 1));

$listClub[3]->AjouterSport(new SportRelais(nomSport: "200", nbJoueurs: 1, distance: 200));
$listClub[2]->AjouterSport(new SportBallons(nomSport: "Pétanque", nbJoueurs: 6, longueur: 80, largeur: 90));
$listClub[3]->AjouterSport(new Sport(nomSport: "Tennis", nbJoueurs: 2));


