<?php
require_once 'DeckDAO.php';
require_once 'functions.php';
$deckDao = new DeckDao();
$decks = $deckDao->fetchAll();
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
<header>
    <h1>Magic: The Gathering &nbsp;-&nbsp; A collection</h1>
</header>
<section class="collection">

    <?php
    $html = '';
    foreach ($decks as $deck) {
        $html .=
            '<div class="deck-card">'
            . '<div class="deck-name"><h2>' . $deck->getName() . '</h2></div>'
            . '<div class="row-1">'
            . '<div class="format">Format: ' . $deck->getFormat() . '</div>'
            . '<div class="colour-id">Colour ID: ' . $deck->getColourID() . '</div>'
            . '</div>'
            . '<div class="deck-image"><img src="' . $deck->getImage() . '" alt="The ' . $deck->getName()
            . ' deck"></div>'
            . '<div class="deck-description">' . $deck->getPrimer() . '</div>'
            . '<div class="row-2">'
            . '<div class="archetype"><div>Archetype:</div><div>' . $deck->getArchetype() . '</div></div>'
            . '<div class="moxfield-link">' . '<a href="' . $deck->getMoxfieldLink()
            . '" target="_blank"><img src="images/moxfield-logo.png" 
                        alt="Link to the ' . $deck->getName() . ' Moxfield Site"></a></div>'
            . '<div class="last-updated"><div>Last Updated:</div><div>' . intToBritDate($deck->getLastUpdated())
            . '</div></div>'
            . '</div>'
            . '</div>';
    }
    echo $html;
    ?>

</section>

</body>
</html>
