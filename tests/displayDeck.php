<?php

require_once '../functions.php';
require_once '../Deck.php';

    use PHPUnit\Framework\TestCase;



class displayDeck extends TestCase
{
    public function testdisplayDeckGivenLichReturnsLich()
    {
        $expected = '<div class="deck-card"><div class="deck-name"><h2>Live laugh lich</h2></div><div class="row-1"><div class="format">Format: Commander</div><div class="colour-id">Colour ID: Witch</div></div><div class="deck-image"><img src="https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200370/collector-app/IMG_1209_fwkvor.jpg" alt="The Live laugh lich deck"></div><div class="deck-description">Play all the enchantments, get Lich\'s Mastery out. Become a Lich. Live forever.</div><div class="row-2"><div class="archetype"><div>Archetype:</div><div>Enchantments</div></div><div class="moxfield-link"><a href="https://www.moxfield.com/decks/9XERfhDKA0qidNrMH8LXAg" target="_blank"><img src="images/moxfield-logo.png" 
                        alt="Link to the Live laugh lich Moxfield Site"></a></div><div class="last-updated"><div>Last Updated:</div><div>21 Dec 2022</div></div></div></div>';
        $deck = new Deck('Live laugh lich', 'Commander', 'Witch', 'Enchantments', '2022-12-21',
        'Play all the enchantments, get Lich\'s Mastery out. Become a Lich. Live forever.',
            'https://res.cloudinary.com/dpwe2gqim/image/upload/v1680200370/collector-app/IMG_1209_fwkvor.jpg',
            'https://www.moxfield.com/decks/9XERfhDKA0qidNrMH8LXAg');
        $decks = [$deck];
        $result = displayDeck($decks);
        $this->assertEquals($expected, $result);
    }
}
