<?php

class animal
{
    private array $listCat = [];

    /**
     * @param cat $cat
     * @return void
     */
    public function setCat(cat $cat)
    {
        $this->listCat[] = $cat;
    }

    /**
     * @return array
     */
    public function getCat(): array
    {
        return $this->listCat;
    }
}