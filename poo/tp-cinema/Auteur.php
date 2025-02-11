<?php

class Auteur
{
    private string $nomAuteur;
    private string $prenomAuteur;
    private bool $oscar;

    /**
     * @param string $nomAuteur
     * @param string $prenomAuteur
     * @param bool $oscar
     */
    public function __construct(string $nomAuteur, string $prenomAuteur, bool $oscar)
    {
        $this->nomAuteur = $nomAuteur;
        $this->prenomAuteur = $prenomAuteur;
        $this->oscar = $oscar;
    }

    public function getNomAuteur(): string
    {
        return $this->nomAuteur;
    }

    public function getPrenomAuteur(): string
    {
        return $this->prenomAuteur;
    }

    public function isOscar(): bool
    {
        return $this->oscar;
    }
}