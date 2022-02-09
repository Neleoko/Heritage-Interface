<?php

class Sport implements Isport
{
    private $nomSport;
    protected $nbJoueurs;

    /**
     * @param $nomSport
     * @param $nbJoueurs
     */
    public function __construct(string $nomSport, int $nbJoueurs)
    {
        $this->nomSport = $nomSport;
        $this->nbJoueurs = $nbJoueurs;
    }

    /**
     * @return string
     */
    public function getNomSport(): string
    {
        return $this->nomSport;
    }

    /**
     * @return int
     */
    public function getNbJoueurs(): int
    {
        return $this->nbJoueurs;
    }

    public function getDescription(): string
    {
        return 'Description <br>  Nomdusport : ' . $this->getNomSport() .
            " - nombre de joueur : " . $this->nbJoueurs;
    }

}
