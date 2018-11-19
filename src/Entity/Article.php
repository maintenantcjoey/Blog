<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
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
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Category;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rose;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $violet;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rouge;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bleu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $noir;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $vert;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $orange;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $blanc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $jaune;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $marine;

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

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    public function getRose(): ?string
    {
        return $this->rose;
    }

    public function setRose(string $rose): self
    {
        $this->rose = $rose;

        return $this;
    }

    public function getViolet(): ?string
    {
        return $this->violet;
    }

    public function setViolet(string $violet): self
    {
        $this->violet = $violet;

        return $this;
    }

    public function getRouge(): ?string
    {
        return $this->rouge;
    }

    public function setRouge(string $rouge): self
    {
        $this->rouge = $rouge;

        return $this;
    }

    public function getBleu(): ?string
    {
        return $this->bleu;
    }

    public function setBleu(string $bleu): self
    {
        $this->bleu = $bleu;

        return $this;
    }

    public function getNoir(): ?string
    {
        return $this->noir;
    }

    public function setNoir(string $noir): self
    {
        $this->noir = $noir;

        return $this;
    }

    public function getVert(): ?string
    {
        return $this->vert;
    }

    public function setVert(string $vert): self
    {
        $this->vert = $vert;

        return $this;
    }

    public function getOrange(): ?string
    {
        return $this->orange;
    }

    public function setOrange(string $orange): self
    {
        $this->orange = $orange;

        return $this;
    }

    public function getBlanc(): ?string
    {
        return $this->blanc;
    }

    public function setBlanc(string $blanc): self
    {
        $this->blanc = $blanc;

        return $this;
    }

    public function getJaune(): ?string
    {
        return $this->jaune;
    }

    public function setJaune(string $jaune): self
    {
        $this->jaune = $jaune;

        return $this;
    }

    public function getMarine(): ?string
    {
        return $this->marine;
    }

    public function setMarine(string $marine): self
    {
        $this->marine = $marine;

        return $this;
    }
}
