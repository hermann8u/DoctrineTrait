<?php

namespace FH\DoctrineTrait;

use Doctrine\ORM\Mapping as ORM;

/**
 * Add a location to an entity with latitude and longitude
 */
trait LocalizableEntity
{
    /**
     * @var float
     * 
     * @ORM\Column(type="decimal", precision=10, scale=7, nullable=true)
     */
    protected $latitude;

    /**
     * @var float
     * 
     * @ORM\Column(type="decimal", precision=10, scale=7, nullable=true)
     */
    protected $longitude;

    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getLocation(): ?string
    {
        if (!$this->latitude || !$this->longitude) {
            return null;
        }

        return ((string) $this->latitude.','.(string) $this->longitude);
    }
}