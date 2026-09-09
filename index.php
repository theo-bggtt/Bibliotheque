<?php

require_once 'bibliotheque.php';
require_once 'livre.php';
require_once 'livreElectronique.php';

$bibliotheque = new Bibliotheque();

$erreur = false;

try {
    $bibliotheque->ajouterLivre(
        new Livre("The Catcher in the Rye", "J.D. Salinger", "9780316769488", new DateTime('1951-07-16'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("1984", "George Orwell", "9780451524935", new DateTime('1949-06-08'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("To Kill a Mockingbird", "Harper Lee", "9780060935467", new DateTime('1960-07-11'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("Pride and Prejudice", "Jane Austen", "9780141040349", new DateTime('1813-01-28'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("The Great Gatsby", "F. Scott Fitzgerald", "9780743273565", new DateTime('1925-04-10'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("Moby Dick", "Herman Melville", "9780142437247", new DateTime('1851-10-18'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("The Hobbit", "J.R.R. Tolkien", "9780547928227", new DateTime('1937-09-21'))
    );

    $bibliotheque->ajouterLivre(
        new Livre("Brave New World", "Aldous Huxley", "9780060850524", new DateTime('1932-08-01'))
    );

    $bibliotheque->ajouterLivre(
        new LivreElectronique("Sapiens: A Brief History of Humankind", "Yuval Noah Harari", "9780062316097", new DateTime('2011-09-04'), 1.2)
    );

    $bibliotheque->ajouterLivre(
        new LivreElectronique("Digital Minimalism", "Cal Newport", "9780525536512", new DateTime('2019-02-05'), 0.9)
    );

    $bibliotheque->ajouterLivre(
        new LivreElectronique("The Lean Startup", "Eric Ries", "9780307887894", new DateTime('2011-09-13'), 1.5)
    );

    $bibliotheque->ajouterLivre(
        new LivreElectronique("Atomic Habits", "James Clear", "9780735211292", new DateTime('2018-10-16'), 1.3)
    );

    $bibliotheque->ajouterLivre(
        new LivreElectronique("Educated", "Tara Westover", "9780399590504", new DateTime('2018-02-20'), 2.0)
    );
} catch (Throwable $e) {
    $erreur = $e->getMessage();
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO : Bibliothèque</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="wrapper">
        <h1>Ma bibliothèque</h1>
        <div class="container">
            <?php if ($erreur !== false) { ?>
                <div class="error-message">
                    Une erreur est survenue : <?= $erreur ?>
                </div>
            <?php } else { ?>
                <?php foreach ($bibliotheque as $livre) { ?>
                    <div class="item">
                        <h2><?= $livre->titre ?> (<?= $livre->formaterDateDeParution('B') ?>)</h2>
                        <p>Par <strong><?= $livre->auteur ?></strong></p>
                        <p>isbn: <?= $livre->isbn ?></p>
                        <?php if ($livre instanceof LivreElectronique) { ?>
                            <p>Poids: <?= $livre->poids ?>Mo</p>
                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </div>
</body>
</html>