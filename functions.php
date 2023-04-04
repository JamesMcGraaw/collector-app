<?php

function intToBritDate(string $intDate): string {
    $timestamp = strtotime($intDate);
    return date("d M Y", $timestamp);
}

function displayDeck(array $decks): string {
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
// Add another argument so can reuse for both archetype and colour id
function populateDropDown($decks): string {
    $html = '';
    foreach ($decks as $deck) {
        $html .=
                '<option value="">--Please select an option--</option>'
                . '<option value="1">Mono White</option>'
                . '<option value="2">Mono Blue</option>'
                . '<option value="3">Mono Black</option>'
                . '<option value="4">Mono Red</option>'
                . '<option value="5">Mono Green</option>'
                . '<option value="6">Colourless</option>'
                . '<option value="7">Azorius</option>'
                . '<option value="8">Dimir</option>'
                . '<option value="9">Rakdos</option>'
                . '<option value="10">Gruul</option>'
                . '<option value="11">Selesnya</option>'
                . '<option value="12">Orzhov</option>'
                . '<option value="13">Izzet</option>'
                . '<option value="14">Golgari</option>'
                . '<option value="15">Boros</option>'
                . '<option value="16">Simic</option>'
                . '<option value="17">Bant</option>'
                . '<option value="18">Esper</option>'
                . '<option value="19">Grixis</option>'
                . '<option value="20">Jund</option>'
                . '<option value="21">Naya</option>'
                . '<option value="22">Abzan</option>'
                . '<option value="23">Jeskai</option>'
                . '<option value="24">Sultai</option>'
                . '<option value="25">Mardu</option>'
                . '<option value="26">Temur</option>'
                . '<option value="27">Glint</option>'
                . '<option value="28">Dune</option>'
                . '<option value="29">Ink</option>'
                . '<option value="30">Witch</option>'
                . '<option value="31">Yore</option>'
                . '<option value="32">5 Colour</option>';
    }
}