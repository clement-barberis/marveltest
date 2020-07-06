<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Hero
 *
 * @ApiResource(
 *     normalizationContext={"groups"={"hero:read"}},
 *     collectionOperations={"get"},
 *     itemOperations={"get"},
 * )
 * @ORM\Table(name="hero")
 * @ORM\Entity
 */
class Hero
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"hero:read", "team:read"})
     * 
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255, nullable=false)
     * @Groups({"hero:read", "team:read"})
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=255, nullable=false)
     * @Groups({"hero:read", "team:read"})
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="identity", type="string", length=255, nullable=false)
     * @Groups({"hero:read", "team:read"})
     */
    private $identity;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=false)
     * @Groups({"hero:read", "team:read"})
     */
    private $picture;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="string", length=255, nullable=false)
     * @Groups({"hero:read"})
     */
    private $origin;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=0, nullable=false)
     * @Groups({"hero:read"})
     */
    private $description;

//    /**
//     * @var int
//     *
//     * @ORM\Column(name="team", type="integer", nullable=false)
//     */
//    private $teamId;

    /**
     * @ORM\ManyToOne(targetEntity=Team::class, inversedBy="heroes")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     * @Groups({"hero:read"})
     */
    private $team;



    /**
     * @ORM\ManyToMany(targetEntity="Power", inversedBy="heroes")
     * @ORM\JoinTable(name="hero_power")
     * @Groups({"hero:read"})
     */
    private $powers;

    public function getPowers()
    {
        return $this->powers;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getIdentity(): ?string
    {
        return $this->identity;
    }

    public function setIdentity(string $identity): self
    {
        $this->identity = $identity;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getOrigin(): ?string
    {
        return $this->origin;
    }

    public function setOrigin(string $origin): self
    {
        $this->origin = $origin;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

//    public function getTeamId(): ?int
//    {
//        return $this->team;
//    }
//
//    public function setTeamId(int $team): self
//    {
//        $this->team = $team;
//
//        return $this;
//    }

    public function getTeam(): ?Team
    {
        return $this->team;
    }

    public function setTeam(?Team $team): self
    {
        $this->team = $team;

        return $this;
    }


}
