<?php
require_once 'DeckDAO.php';
require_once 'functions.php';
$deckDAO = new DeckDAO();
if (isset($_POST['name_of_deck'])) {
    if (strlen($_POST['name_of_deck']) != 0 && strlen($_POST['format']) != 0 && strlen($_POST['colourid']) != 0 &&
        strlen($_POST['archetype']) != 0 && strlen($_POST['last_updated']) != 0 && strlen($_POST['primer']) != 0 &&
        str_starts_with($_POST['image'], 'https') && str_starts_with($_POST['moxfield_link'], 'https'))
    {
        $newDeck = new Deck($_POST['name_of_deck'], $_POST['format'], $_POST['colourid'], $_POST['archetype']
            , $_POST['last_updated'], $_POST['primer'], $_POST['image'], $_POST['moxfield_link']);
        $deckDAO->add($newDeck);
    }
}
$decks = $deckDAO->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MtG: Collector App</title>

    <meta name="description" content="A collector app to show my Magic: The Gathering decks">
    <meta name="author" content="James McGraw-Allen">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">

    <link rel="icon" href="images/old-sprite.png" sizes="250x250">
    <link rel="shortcut icon" href="images/old-sprite.png">
    <link rel="apple-touch-icon" href="images/old-sprite.png">
</head>

<body>
<header class="page-1">
    <h1>Magic: The Gathering &nbsp;-&nbsp; A collection</h1>
</header>
<p class="link">
    <a href="add-deck.php">You bought another deck?! Add it here...</a>
</p>
<section class="collection">
    <?php
    echo displayDeck($decks);
    ?>
</section>
<footer>

</footer>

</body>
</html>
