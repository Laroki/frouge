<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SquaresRepository")
 */
class Squares
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $square;

    /**
     * @ORM\Column(type="text")
     */
    private $polygon;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $center;

    /**
     * @ORM\Column(type="float")
     */
    private $zoom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSquare(): ?int
    {
        return $this->square;
    }

    public function setSquare(int $square): self
    {
        $this->square = $square;

        return $this;
    }

    public function getPolygon(): ?string
    {
        return $this->polygon;
    }

    public function setPolygon(string $polygon): self
    {
        $this->polygon = $polygon;

        return $this;
    }

    public function getCenter(): ?string
    {
        return $this->center;
    }

    public function setCenter(string $center): self
    {
        $this->center = $center;

        return $this;
    }

    public function getZoom(): ?float
    {
        return $this->zoom;
    }

    public function setZoom(float $zoom): self
    {
        $this->zoom = $zoom;

        return $this;
    }
}
