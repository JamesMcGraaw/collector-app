<?php
require_once 'pdo-connection.php';
require_once 'Deck.php';

class DeckDAO
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('collectorapp');
    }

    public function fetchAll(): array
    {
        $sql = 'SELECT
                    `decks`.`id`, `decks`.`name_of_deck`, `decks`.`last_updated`, `decks`.`primer`,
                    `decks`.`image`, `decks`.`moxfield_link`, `archetype`.`gameplaystyle`, `colourid`.
                    `colourid`, `formats`.`format`'
            . 'FROM
                    `decks`'
            . 'INNER JOIN
                    `formats`'
            . 'ON
                    `decks`.`format` = `formats`.`id`'
            . 'INNER JOIN
                    `colourid`'
            . 'ON
                    `decks`.`colourid` = `colourid`.`id`'
            . 'INNER JOIN
                    `archetype`'
            . 'ON
                    `decks`.`archetype` = `archetype`.`id`';


        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $decks = [];
        foreach ($rows as $row) {
            $deck = new Deck($row['name_of_deck'], $row['format'], $row['colourid'], $row['gameplaystyle']
                , $row['last_updated'], $row['primer'], $row['image'], $row['moxfield_link'], $row['id']);
            $decks[] = $deck;
        }
        return $decks;
    }

    public function fetch(int $deckID): Deck
    {
        $sql = 'SELECT
                    `decks`.`id`, `decks`.`name_of_deck`, `decks`.`last_updated`, `decks`.`primer`,
                    `decks`.`image`, `decks`.`moxfield_link`, `archetype`.`gameplaystyle`, `colourid`.
                    `colourid`, `formats`.`format`'
            . 'FROM
                    `decks`'
            . 'INNER JOIN
                    `formats`'
            . 'ON
                    `decks`.`format` = `formats`.`id`'
            . 'INNER JOIN
                    `colourid`'
            . 'ON
                    `decks`.`colourid` = `colourid`.`id`'
            . 'INNER JOIN
                    `archetype`'
            . 'ON
                    `decks`.`archetype` = `archetype`.`id` '
            . 'WHERE
                    `decks`.`id` = :deckID';

        $values = [':deckID' => $deckID];

        $query = $this->db->prepare($sql);
        $query->execute($values);
        $deck = $query->fetch();

        return new Deck($deck['name_of_deck'], $deck['format'], $deck['colourid'], $deck['gameplaystyle']
            , $deck['last_updated'], $deck['primer'], $deck['image'], $deck['moxfield_link'], $deck['id']);
    }
}
