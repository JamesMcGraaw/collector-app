<?php

class Deck
{

    // Properties
    private int $id;
    private string $name;
    private string $format;
    private string $colourID;
    private string $archetype;
    private string $last_updated;
    private string $primer;
    private string $image;
    private string $moxfield_link;


    public function __construct(
        string   $name, string $format, string $colourID, string $archetype, string $last_updated
        , string $primer, string $image, string $moxfield_link, int $id = -1
    )
    {
        $this->id = $id;
        $this->name = $name;
        $this->format = $format;
        $this->colourID = $colourID;
        $this->archetype = $archetype;
        $this->last_updated = $last_updated;
        $this->primer = $primer;
        $this->image = $image;
        $this->moxfield_link = $moxfield_link;

    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }


    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function setFormat(string $format): void
    {
        $this->format = $format;
    }

    public function getColourID(): string
    {
        return $this->colourID;
    }

    public function setColourID(string $colourID): void
    {
        $this->colourID = $colourID;
    }

    public function getArchetype(): string
    {
        return $this->archetype;
    }

    public function setArchetype(string $archetype): void
    {
        $this->archetype = $archetype;
    }

    public function getLastUpdated(): string
    {
        return $this->last_updated;
    }

    public function setLastUpdated(string $last_updated): void
    {
        $this->last_updated = $last_updated;
    }

    public function getPrimer(): string
    {
        return $this->primer;
    }

    public function setPrimer(string $primer): void
    {
        $this->primer = $primer;
    }

    public function getImage(): string
    {
        return $this->image;
    }

    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    public function getMoxfieldLink(): string
    {
        return $this->moxfield_link;
    }

    public function setMoxfieldLink(string $moxfield_link): void
    {
        $this->moxfield_link = $moxfield_link;
    }

}
