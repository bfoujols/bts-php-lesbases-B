<?php

class Investisseur
{
    private string $nom;
    private int $capital;

    /**
     * @param string $nom
     * @param int $capital
     */
    public function __construct(string $nom, int $capital)
    {
        $this->nom = $nom;
        $this->capital = $capital;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getCapital(): int
    {
        return $this->capital;
    }
}