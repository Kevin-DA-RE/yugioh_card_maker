<?php

namespace App\Entity;

use App\Repository\CardRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CardRepository::class)]
class Card
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $id_card = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::ARRAY)]
    private array $typeline = [];

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $image_url = null;

    #[ORM\Column(length: 255)]
    private ?string $image_url_small = null;

    #[ORM\Column(length: 255)]
    private ?string $image_url_cropped = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Race $race = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    private ?Archetype $archetype = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    private ?Atk $atk = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    private ?Def $def = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    private ?FrameType $frametype = null;

    #[ORM\ManyToOne(inversedBy: 'cards')]
    private ?Level $level = null;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCard(): ?int
    {
        return $this->id_card;
    }

    public function setIdCard(int $id_card): static
    {
        $this->id_card = $id_card;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTypeline(): array
    {
        return $this->typeline;
    }

    public function setTypeline(array $typeline): static
    {
        $this->typeline = $typeline;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->image_url;
    }

    public function setImageUrl(string $image_url): static
    {
        $this->image_url = $image_url;

        return $this;
    }

    public function getImageUrlSmall(): ?string
    {
        return $this->image_url_small;
    }

    public function setImageUrlSmall(string $image_url_small): static
    {
        $this->image_url_small = $image_url_small;

        return $this;
    }

    public function getImageUrlCropped(): ?string
    {
        return $this->image_url_cropped;
    }

    public function setImageUrlCropped(string $image_url_cropped): static
    {
        $this->image_url_cropped = $image_url_cropped;

        return $this;
    }

    public function getRace(): ?Race
    {
        return $this->race;
    }

    public function setRace(?Race $race): static
    {
        $this->race = $race;

        return $this;
    }

    public function getArchetype(): ?Archetype
    {
        return $this->archetype;
    }

    public function setArchetype(?Archetype $archetype): static
    {
        $this->archetype = $archetype;

        return $this;
    }

    public function getAtk(): ?Atk
    {
        return $this->atk;
    }

    public function setAtk(?Atk $atk): static
    {
        $this->atk = $atk;

        return $this;
    }

    public function getDef(): ?Def
    {
        return $this->def;
    }

    public function setDef(?Def $def): static
    {
        $this->def = $def;

        return $this;
    }

    public function getFrametype(): ?FrameType
    {
        return $this->frametype;
    }

    public function setFrametype(?FrameType $frametype): static
    {
        $this->frametype = $frametype;

        return $this;
    }

    public function getLevel(): ?Level
    {
        return $this->level;
    }

    public function setLevel(?Level $level): static
    {
        $this->level = $level;

        return $this;
    }

}
