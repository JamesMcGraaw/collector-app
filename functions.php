<?php

function intToBritDate(string $intDate): string
{
    $timestamp = strtotime($intDate);
    return date("d M Y", $timestamp);
}

function displayDeck(array $decks): string
{
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
    return $html;
}

function populateDropDownColourID(array $colourids): string
{
    $html = '';
    foreach ($colourids as $colourid) {
        $html .=
            '<option value="' . $colourid->getID() . '">' . $colourid->getColourID() . '</option>';
    }
    return $html;
}

function populateDropDownArchetypes(array $archetypes): string
{
    $html = '';
    foreach ($archetypes as $archetype) {
        $html .=
            '<option value="' . $archetype->getID() . '">' . $archetype->getArchetype() . '</option>';
    }
    return $html;
}
