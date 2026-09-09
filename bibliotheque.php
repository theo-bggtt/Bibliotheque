<?php

namespace Bibliotheque\Modele;

class Bibliotheque implements \Iterator
{
    private array $livres = [];

    private int $position;

    public function __construct()
    {
        $this->position = 0;
    }

    public function ajouterLivre(Livre $livre): void
    {
        $this->livres[] = $livre;
    }

    public function getLivres(): array
    {
        return $this->livres;
    }

    public function current(): Livre
    {
        return $this->livres[$this->position];
    }
    
    public function key() : int {
        return $this->position;
    }
    public function next(): void
    {
        $this->position++;
    }

    public function rewind(): void
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        if (isset($this->livres[$this->position])) {
            return true;
        } else {
            return false;
        }
    }
}