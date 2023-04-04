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
            $decks[] = new Deck($row['name_of_deck'], $row['format'], $row['colourid'], $row['gameplaystyle']
                , $row['last_updated'], $row['primer'], $row['image'], $row['moxfield_link'], $row['id']);
        }
        return $decks;
    }
}
