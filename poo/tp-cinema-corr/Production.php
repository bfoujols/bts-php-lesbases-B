<?php

class Production
{
    private array $investisseur = [];

    public function getInvestisseur(): array
    {
        return $this->investisseur;
    }

    public function ajouterInvestisseur(Investisseur $investisseur): void
    {
        $this->investisseur[] = $investisseur;
    }
}