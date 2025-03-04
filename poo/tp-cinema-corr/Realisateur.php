<?php

class Realisateur
{
    private string $nomRealisateur;
    private string $prenomRealisateur;

    public function __construct(string $unNom, string $unPrenom)
    {
        $this->nomRealisateur = $unNom;
        $this->prenomRealisateur = $unPrenom;
    }

    public function getNomRealisateur(): string
    {
        return $this->nomRealisateur;
    }

    public function getPrenomRealisateur(): string
    {
        return $this->prenomRealisateur;
    }
}