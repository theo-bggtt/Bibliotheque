<?php
namespace Bibliotheque\Namespaces;

class LivreElectronique extends Livre
{
    public private(set) float $poids;

    public function __construct(string $titre, string $auteur, string $isbn, DateTimeInterface $dateDeParution, float $poids)
    {
        parent::__construct($titre, $auteur, $isbn, $dateDeParution);
        $this->poids = $poids;
    }
}