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
        <a href="index.php">Go back home</a>
    </header>

    <h1>
        Add a new deck:
    </h1>

    <form>
        <label  for="name_of_deck">Name the deck: </label>
            <input type="text" id="name_of_deck" name="name_of_deck" value=""><br>
        <label for="format">What format is it?: </label>
            <input type="radio" id="commander" name="format" value="1">
            <label for="commander">Commander</label>
            <input type="radio" id="modern" name="format" value="2">
            <label for="modern">Modern</label>
            <input type="radio" id="pauper" name="format" value="3">
            <label for="pauper">Pauper</label>
            <input type="radio" id="pedh" name="format" value="4">
            <label for="pedh">pEDH</label><br>
<!--Just realised after having written this could do this as a function from database, don't @ me-->
        <label for="colourid">What colour ID does the deck have?: </label>
            <select id="colourid">
                <option value="">--Please select an option--</option>
                <option value="1">Mono White</option>
                <option value="2">Mono Blue</option>
                <option value="3">Mono Black</option>
                <option value="4">Mono Red</option>
                <option value="5">Mono Green</option>
                <option value="6">Colourless</option>
                <option value="7">Azorius</option>
                <option value="8">Dimir</option>
                <option value="9">Rakdos</option>
                <option value="10">Gruul</option>
                <option value="11">Selesnya</option>
                <option value="12">Orzhov</option>
                <option value="13">Izzet</option>
                <option value="14">Golgari</option>
                <option value="15">Boros</option>
                <option value="16">Simic</option>
                <option value="17">Bant</option>
                <option value="18">Esper</option>
                <option value="19">Grixis</option>
                <option value="20">Jund</option>
                <option value="21">Naya</option>
                <option value="22">Abzan</option>
                <option value="23">Jeskai</option>
                <option value="24">Sultai</option>
                <option value="25">Mardu</option>
                <option value="26">Temur</option>
                <option value="27">Glint</option>
                <option value="28">Dune</option>
                <option value="29">Ink</option>
                <option value="30">Witch</option>
                <option value="31">Yore</option>
                <option value="32">5 Colour</option>
            </select><br>
<!--Do code to go through database for above and use again below for archetypes-->
        <label for="last-updated">Deck last updated:</label>
            <input type="date" id="last-updated" name="last-updated"><br>
        <label  for="primer">Write a short description of the deck's strategy: </label>
            <input type="text" id="primer" name="primer" value=""><br>
        <label for="image">Enter a URL for a deck image (HTTPS):</label>
            <input type="deck-image" name="image" id="image" placeholder="https://www.google.com/imghp?hl=en"
               pattern="https://.*"><br>
        <label for="moxfield-link">Enter a URL for Moxfield (HTTPS):</label>
            <input type="moxfield-link" name="moxfield-link" id="moxfield-link" placeholder="https://moxfield.com"
               pattern="https://.*"><br>
       <input type="submit" value="Submit">
    </form>

</body>
</html>
