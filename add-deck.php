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
<header class="page-2">
    <a href="index.php">Go back home</a>
</header>

<section class="add-deck">
    <h1>
        Add a new deck:
    </h1>
    <form action="index.php" method="post">
        <p>
            <label for="name_of_deck">
                Name the deck:
            </label>
            <p>
            <input type="text" id="name_of_deck" name="name_of_deck" value="" required>
            </p>
        </p>
            <fieldset>
            <legend>What format is it?: </legend>
            <p>
            <label for="commander">Commander</label>
            <input type="radio" id="commander" name="format" value="1" required>
            <label for="modern">Modern</label>
            <input type="radio" id="modern" name="format" value="2" required>
            <label for="pauper">Pauper</label>
            <input type="radio" id="pauper" name="format" value="3" required>
            <label for="pedh">pEDH</label>
            <input type="radio" id="pedh" name="format" value="4" required>
            </p>
            </fieldset>
        <p>
            <label for="colourid">What colour ID does the deck have?: </label>
        <p>
            <select name="colourid" id="colourid" required>
                <option value="">--Please select an option--</option>
                <?php
                echo populateDropDownColourID($colourids);
                ?>
            </select>
        </p>
        </p>
        <p>
            <label for="archetype">What type of gameplay does it have?: </label>
        <p>
            <select name="archetype" id="archetype" required>
                <option value="">--Please select an option--</option>
                <?php
                echo populateDropDownArchetypes($archetypes);
                ?>
            </select>
        </p>
        </p>
        <p>
            <label for="last_updated">Deck last updated:</label>
        <p>
            <input type="date" id="last_updated" name="last_updated" required>
        </p>
        </p>
        <p>
            <label for="primer">Write a description of the strategy: </label>
        <p>
            <input type="text" id="primer" name="primer" value="&nbsp;" required>
        </p>
        </p>
        <p>
            <label for="image">Enter a URL for a deck image (HTTPS):</label>
        <p>
            <input name="image" id="image" pattern="https://.*" value="" required>
        </p>
        </p>
        <p>
            <label for="moxfield-link">Enter a URL for Moxfield (HTTPS):</label>
        </p>
            <input name="moxfield_link" id="moxfield-link" pattern="https://.*" value="" required><br>
        </p>
        </p>
        <p>
            <input type="submit" value="Submit">
        </p>
    </form>
</section>

</body>
</html>
