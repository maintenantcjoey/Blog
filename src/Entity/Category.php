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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Article", mappedBy="category")
     */
    private $articles;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Girl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Boy;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mix;

    public function __construct()
    {
        $this->articles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setCategory($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->contains($article)) {
            $this->articles->removeElement($article);
            // set the owning side to null (unless already changed)
            if ($article->getCategory() === $this) {
                $article->setCategory(null);
            }
        }

        return $this;
    }

    public function getGirl(): ?string
    {
        return $this->Girl;
    }

    public function setGirl(string $Girl): self
    {
        $this->Girl = $Girl;

        return $this;
    }

    public function getBoy(): ?string
    {
        return $this->Boy;
    }

    public function setBoy(string $Boy): self
    {
        $this->Boy = $Boy;

        return $this;
    }

    public function getMix(): ?string
    {
        return $this->mix;
    }

    public function setMix(string $mix): self
    {
        $this->mix = $mix;

        return $this;
    }
}
