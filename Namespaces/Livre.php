<?php
namespace Bibliotheque\Namespaces;
class Livre
{
    public private(set) string $titre;
    public private(set) string $auteur;
    public private(set) string $isbn;
    public private(set) \DateTimeInterface $dateDeParution;

    public function __construct(string $titre, string $auteur, string $isbn, \DateTimeInterface $dateDeParution)
    {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->isbn = $isbn;
        $this->dateDeParution = $dateDeParution;
    }

    public function formaterDateDeParution(string $format) : string {
        return $this->dateDeParution->format($format);
    }
}