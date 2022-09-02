<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\PasswordRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=PasswordRepository::class)
 */
class Password
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $lenght;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $spec;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $maj;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $min;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $number;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLenght(): ?int
    {
        return $this->lenght;
    }

    public function setLenght(?int $lenght): self
    {
        $this->lenght = $lenght;

        return $this;
    }

    public function isSpec(): ?bool
    {
        return $this->spec;
    }

    public function setSpec(?bool $spec): self
    {
        $this->spec = $spec;

        return $this;
    }

    public function isMaj(): ?bool
    {
        return $this->maj;
    }

    public function setMaj(?bool $maj): self
    {
        $this->maj = $maj;

        return $this;
    }

    public function isMin(): ?bool
    {
        return $this->min;
    }

    public function setMin(?bool $min): self
    {
        $this->min = $min;

        return $this;
    }

    public function isNumber(): ?bool
    {
        return $this->number;
    }

    public function setNumber(?bool $number): self
    {
        $this->number = $number;

        return $this;
    }
}
