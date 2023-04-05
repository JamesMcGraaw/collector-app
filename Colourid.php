<?php

class Colourid
{
    private int $id;
    private string $colourID;

    public function __construct(
        int $id, string $colourID
    )
    {
        $this->id = $id;
        $this->colourID = $colourID;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getColourID(): string
    {
        return $this->colourID;
    }

    public function setColourID(string $colourID): void
    {
        $this->colourID = $colourID;
    }
}
