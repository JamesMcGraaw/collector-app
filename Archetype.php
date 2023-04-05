<?php

class Archetype
{
    private int $id;
    private string $archetype;

    public function __construct(
        int $id, string $archetype
    )
    {
        $this->id = $id;
        $this->archetype = $archetype;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getArchetype(): string
    {
        return $this->archetype;
    }

    public function setColourID(string $archetype): void
    {
        $this->archetype = $archetype;
    }
}
