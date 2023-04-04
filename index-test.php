<?php

require_once 'DeckDao.php';
require_once 'Deck.php';

$deckDAO = new DeckDao();

$decks = $deckDAO->fetchAll();

//echo '<pre>';
//print_r($decks);
//echo '</pre>';

//$modernBurn = $deckDAO->fetch(2);
//
//echo '<pre>';
//print_r($modernBurn);
//echo '</pre>';

//$winnota = new Deck('Win-ota', '1', '15', '3'
//                    ,'2022-12-15', 'Winota go brrrrr'
//                    ,'https://gatherer.wizards.com/Handlers/Image.ashx?multiverseid=479736&type=card'
//                    , 'https://www.moxfield.com/decks/YrK70e-Ao0-a8EP-CnUdcA');
//
//$winnotaID = $deckDAO->add($winnota);
//
//$winnota->setId($winnotaID);
//
//echo '<pre>';
//print_r($winnota);
//echo '</pre>';


