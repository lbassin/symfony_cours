<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Article
 *
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 * @ORM\Table(name="article")
 */
class Article
{
    /**
     * @var integer $id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id()
     */
    private $id;

    /**
     * @var string $title
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank(message="Veuillez choisir un titre !")
     */
    private $title;

    /**
     * @var string $slug
     * @ORM\Column(type="string", nullable=true)
     */
    private $slug = null;

    /**
     * @var string $content
     * @ORM\Column(type="text")
     */
    private $content = "";

    /**
     * @var Tag $tag
     * @ORM\ManyToOne(targetEntity="App\Entity\Tag")
     * @ORM\JoinColumn(nullable=false)
     */
    private $tag;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Article
     */
    public function setTitle(string $title): Article
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     *
     * @return Article
     */
    public function setSlug(string $slug):? Article
    {
        $this->slug = $slug;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): ?string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return Article
     */
    public function setContent(string $content): Article
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return Tag|null
     */
    public function getTag(): ?Tag
    {
        return $this->tag;
    }

    /**
     * @param Tag|null $tag
     * @return Article
     */
    public function setTag(?Tag $tag): self
    {
        $this->tag = $tag;

        return $this;
    }
}
