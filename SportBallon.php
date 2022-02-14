<?php

class SportBallon extends Sport
{
    private $largeur;
    private $longueur;

    public function __construct(string $nomSport, int $nbJoueurs, int $longueur, int $largeur)
    {
        parent::__construct($nomSport, $nbJoueurs);
        $this->longueur = $longueur;
        $this->largeur=$largeur;
    }

    /**
     * @return mixed
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * @return mixed
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    public function getDescription(): string
    {
        return 'Description <br> Nomdusport : ' . $this->getNomSport() .
            " / nombre de joueur : " . $this->nbJoueurs .
            " / longueur : " . $this->longueur .
            " / largeur : " . $this->largeur;
    }
}