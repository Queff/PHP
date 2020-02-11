<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Articles", mappedBy="category")
     */
    private $Articless;

    public function __construct()
    {
        $this->Articless = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|Articles[]
     */
    public function getArticless(): Collection
    {
        return $this->Articless;
    }

    public function addArticless(Articles $articless): self
    {
        if (!$this->Articless->contains($articless)) {
            $this->Articless[] = $articless;
            $articless->setCategory($this);
        }

        return $this;
    }

    public function removeArticless(Articles $articless): self
    {
        if ($this->Articless->contains($articless)) {
            $this->Articless->removeElement($articless);
            // set the owning side to null (unless already changed)
            if ($articless->getCategory() === $this) {
                $articless->setCategory(null);
            }
        }

        return $this;
    }
}
