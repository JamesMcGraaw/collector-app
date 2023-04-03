<?php

require_once 'DeckDao.php';
require_once 'Deck.php';

$deckDAO = new DeckDao();

$decks = $deckDAO->fetchAll();

echo '<pre>';
print_r($decks);
echo '</pre>';

$modernBurn = $deckDAO->fetch(2);

echo '<pre>';
print_r($modernBurn);
echo '</pre>';

