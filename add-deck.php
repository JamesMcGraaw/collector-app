<?php
require_once 'DeckDAO.php';
require_once 'functions.php';
require_once 'Colourid.php';
require_once 'ColouridDAO.php';
require_once 'Archetype.php';
require_once 'ArchetypeDAO.php';
$deckDao = new DeckDao();
$colouridDAO = new ColouridDAO();
$archetypeDAO = new ArchetypeDAO();
$decks = $deckDao->fetchAll();
$colourids = $colouridDAO->fetchAll();
$archetypes = $archetypeDAO->fetchAll();
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
    <a href="index.php">Go back home</a>
</header>

<h1>
    Add a new deck:
</h1>

<div class="add-deck">
    <form action="index.php" method="post">
        <p>
            <label>Name the deck: </label>
            <input type="text" id="name_of_deck" name="name_of_deck" value="">
        </p>
        <p>
            <label>What format is it?: </label><br>
            <input type="radio" id="commander" name="format" value="1">
            <label for="commander">Commander</label>
            <input type="radio" id="modern" name="format" value="2">
            <label for="modern">Modern</label>
            <input type="radio" id="pauper" name="format" value="3">
            <label for="pauper">Pauper</label>
            <input type="radio" id="pedh" name="format" value="4">
            <label for="pedh">pEDH</label>
        </p>
        <p>
            <label>What colour ID does the deck have?: </label>
            <select name="colourid">
                <option value="">--Please select an option--</option>
                <?php
                echo populateDropDownColourID($colourids);
                ?>
            </select>
        </p>
        <p>
            <label>What type of gameplay does it have?: </label>
            <select name="archetype" id="archetype">
                <option value="">--Please select an option--</option>
                <?php
                echo populateDropDownArchetypes($archetypes);
                ?>
            </select>
        </p>
        <p>
            <label>Deck last updated:</label>
            <input type="date" id="last-updated" name="last_updated"><br>
        </p>
        <p>
            <label>Write a description of the strategy: </label>
            <input type="text" id="primer" name="primer" value=""><br>
        </p>
        <p>
            <label>Enter a URL for a deck image (HTTPS):</label>
            <input name="image" id="image" placeholder="https://www.google.com/imghp?hl=en"
                   pattern="https://.*"><br>
        </p>
        <p>
            <label>Enter a URL for Moxfield (HTTPS):</label>
            <input name="moxfield_link" id="moxfield-link" placeholder="https://moxfield.com"
                   pattern="https://.*"><br>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</div>

</body>
</html>
