<?php
require_once 'pdo-connection.php';
require_once 'Colourid.php';

class ColouridDAO
{
    private PDO $db;

    public function __construct()
    {
        $this->db = connectToDb('collectorapp');
    }

    public function fetchAll(): array
    {
        $sql = 'SELECT
                    `id`, `colourid`'
            . 'FROM
                    `colourid`';

        $query = $this->db->prepare($sql);
        $query->execute();
        $rows = $query->fetchAll();

        $colourids = [];
        foreach ($rows as $row) {
            $colourids[] = new Colourid($row['id'], $row['colourid']);
        }
        return $colourids;
    }
}
