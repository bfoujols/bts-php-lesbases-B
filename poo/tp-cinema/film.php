<?php

class film
{
    private int $idFilm;
    private string $nomfilm;
    private int $nbEntrees;

    private Realisateur $realisateur;

    private array $listAuteurs = [];

    /**
     * @param int $idFilm
     * @param string $nomfilm
     * @param int $nbEntrees
     */
    public function __construct(int $idFilm, string $nomfilm, int $nbEntrees)
    {
        $this->idFilm = $idFilm;
        $this->nomfilm = $nomfilm;
        $this->nbEntrees = $nbEntrees;
    }

    public function getIdFilm(): int
    {
        return $this->idFilm;
    }

    public function getNomfilm(): string
    {
        return $this->nomfilm;
    }

    public function getNbEntrees(): int
    {
        return $this->nbEntrees;
    }

    public function setNbEntrees(int $nbEntrees): void
    {
        $this->nbEntrees = $nbEntrees;
    }

    public function getRealisateur(): Realisateur
    {
        return $this->realisateur;
    }

    public function setRealisateur(Realisateur $realisateur): void
    {
        $this->realisateur = $realisateur;
    }

    public function getListAuteurs(): array
    {
        return $this->listAuteurs;
    }

    public function setListAuteurs(Auteur $auteur): void
    {
        $this->listAuteurs[] = $auteur;
    }
}