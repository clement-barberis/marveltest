<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * Power
 *
 * @ORM\Table(name="power")
 * @ORM\Entity
 */
class Power
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @Groups({"hero:read"})
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="power", type="string", length=255, nullable=false)
     * @Groups({"hero:read"})
     */
    private $power;

    /**
     * @ORM\ManyToMany(targetEntity="Hero", mappedBy="powers")
     */
    private $heroes;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPower(): ?string
    {
        return $this->power;
    }

    public function setPower(string $power): self
    {
        $this->power = $power;

        return $this;
    }


}
