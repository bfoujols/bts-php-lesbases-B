<?php

class cat
{
    public string $name;
    private int $genre;
    private int $age;
    private int $weight;
    private int $color;

    /**
     * @param string $name Nom du Chat
     * @param int $genre Son genre (1 à 3)
     * @param int $color Couleur (1 à 3)
     */
    public function __construct(string $name, int $genre, int $color = 0)
    {
        $this->name = $name;
        $this->setGenre($genre);
        $this->setColor($color);
    }

    public function setGenre(int $genreRefKey): void
    {
        if ($genreRefKey >= 1 && $genreRefKey <= 3) {
            $this->genre = $genreRefKey;
        } else {
            $this->genre = 3;
        }
    }

    public function getGenre(): string
    {
        return genreRef[$this->genre];
    }

    public function getColor(): string
    {
        return colorRef[$this->color];
    }

    public function setColor(int $colorKey): void
    {
        if ($colorKey >= 1 && $colorKey <= 3) {
            $this->color = $colorKey;
        } else {
            $this->color = 0;
        }
    }
}
