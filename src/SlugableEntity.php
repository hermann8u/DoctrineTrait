<?php

namespace FH\DoctrineTrait;

use Doctrine\Common\Inflector\Inflector;
use Doctrine\ORM\Mapping as ORM;

/**
 * Add a name and a slug based on it on an entity
 * 
 * @warning Require to precise that the entity has lifecycle callback
 */
trait SlugableEntity
{
    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     * 
     * @ORM\Column(type="string", length=255)
     */
    protected $slug;

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateSlug()
    {
        $this->setSlug(str_replace('_', '-', Inflector::tableize($this->name)));
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}