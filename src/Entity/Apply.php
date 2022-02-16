<?php

namespace App\Entity;

use App\Repository\ApplyRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApplyRepository::class)
 */
class Apply
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="applies")
     */
    private $resume;

    /**
     * @ORM\ManyToOne(targetEntity=Post::class, inversedBy="applies")
     */
    private $offre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getResume(): ?User
    {
        return $this->resume;
    }

    public function setResume(?User $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getOffre(): ?Post
    {
        return $this->offre;
    }

    public function setOffre(?Post $offre): self
    {
        $this->offre = $offre;

        return $this;
    }
}
