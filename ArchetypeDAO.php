<?php
require_once 'pdo-connection.php';
require_once 'Archetype.php';
class ArchetypeDAO
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('collectorapp');
    }

        public function fetchAll(): array
    {
        $sql = 'SELECT
                    `id`, `archetype`'
            . 'FROM
                    `archetypes`';

        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $archetypes = [];
        foreach ($rows as $row) {
            $archetypes[] = new Archetype($row['id'], $row['archetype']);
        }
        return $archetypes;
    }
}
