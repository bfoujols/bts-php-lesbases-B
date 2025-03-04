<?php

class Acteur
{
    private string $nomActeur;
    private string $prenomActeur;
    private bool $estCesar;

    public function __construct(string $unNom, string $unPrenom, bool $unCesar = false)
    {
        $this->nomActeur = $unNom;
        $this->prenomActeur = $unPrenom;
        $this->estCesar = $unCesar;
    }

    public function getNomActeur(): string
    {
        return $this->nomActeur;
    }

    public function getPrenomActeur(): string
    {
        return $this->prenomActeur;
    }

    public function getEstCesar(): string
    {
        return $this->estCesar == 0 ? "false" : "true";
    }

    public function setEstCesar(bool $unCesar): void
    {
        $this->estCesar = $unCesar;
    }
}