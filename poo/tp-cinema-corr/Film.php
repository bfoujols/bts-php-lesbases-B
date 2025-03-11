<?php

class Film extends Production
{
    private int $idFilm;
    private string $nomFilm;
    private int $nbEntrees;

    private Realisateur|null $sonRealisateur;

    private array $lesActeurs = [];

    public function __construct(int $unId, string $unNom, int $unNb, ?Realisateur $unReal = null) {
        $this->idFilm = $unId;
        $this->nomFilm = $unNom;
        $this->nbEntrees = $unNb;
        $this->sonRealisateur = $unReal;
    }

    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

    public function getNomFilm(): string
    {
        return $this->nomFilm;
    }

    public function getNbEntrees(): int
    {
        return $this->nbEntrees;
    }

    public function setNbEntree(int $unNb): void
    {
        $this->nbEntrees = $unNb;
    }

    public function getSonRealisateur(): Realisateur|null
    {
        return $this->sonRealisateur;
    }

    public function getLesActeurs(): array
    {
        return $this->lesActeurs;
    }

    public function ajouterActeurs(Acteur $lesActeurs): void
    {
        $this->lesActeurs[] = $lesActeurs;
    }

    public function showListeActeurs(): void
    {
        foreach ($this->lesActeurs as $unActeur) {
            echo $unActeur->getNomActeur() . " - " . $unActeur->getPrenomActeur() . " - " . $unActeur->getEstCesar() . "\n";
        }
    }
}