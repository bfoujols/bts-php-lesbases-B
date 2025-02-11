<?php

class Realisateur
{
    private string $nomRealisateur;
    private string $prenomRealisateur;

    /**
     * @param string $nomRealisateur
     * @param string $prenomRealisateur
     */
    public function __construct(string $nomRealisateur, string $prenomRealisateur)
    {
        $this->nomRealisateur = $nomRealisateur;
        $this->prenomRealisateur = $prenomRealisateur;
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