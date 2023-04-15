<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Repository\SessionsRepository;
use Doctrine\DBAL\Types\DateType;

#[ORM\Entity(repositoryClass: SessionsRepository::class)]
class Sessions
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;


    #[ORM\Column]
    private float $price;


    #[ORM\Column(type: "date")]
    private \DateTime $date;


    #[ORM\Column(type: "time")]
    private \DateTime $startTime;


    #[ORM\Column(type: "time")]
    private \DateTime $endTime;


    #[ORM\Column(length: 500)]
    private string $topics = "";

    #[ORM\Column]
    private ?int $places = 0;

    #[ORM\Column]
    private ?int $maxPlaces = null;


    #[ORM\Column(length: 500)]
    private ?string $meetLink = null;


    #[ORM\Column(length: 500)]
    private ?string $imageLink = null;


    #[ORM\ManyToOne(targetEntity: Courses::class, inversedBy: 'sessions')]
    #[ORM\JoinColumn(name: 'id_course', referencedColumnName: 'id', nullable: true)]
    private ?Courses $course = null;

    #[ORM\OneToMany(targetEntity: Resources::class, mappedBy: "sessions")]
    private ?Collection $resources;

    #[ORM\ManyToOne(targetEntity: Users::class, inversedBy: 'sessions')]
    #[ORM\JoinColumn(name: 'id_user', referencedColumnName: 'id', nullable: true)]
    private ?Users $user = null;

    public function __construct()
    {
        $this->resources = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getDate(): \DateTime
    {
        return $this->date;
    }

    public function setDate(\DateTime $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getStartTime(): \DateTime
    {
        return $this->startTime;
    }

    public function setStartTime(\DateTime $startTime): self
    {
        $this->startTime = $startTime;

        return $this;
    }

    public function getEndTime(): \DateTime
    {
        return $this->endTime;
    }

    public function setEndTime(\DateTime $endTime): self
    {
        $this->endTime = $endTime;

        return $this;
    }

    public function getTopics(): string
    {
        return $this->topics;
    }

    public function setTopics(string $topics): self
    {
        $this->topics = $topics;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(?int $places): self
    {
        $this->places = $places;

        return $this;
    }

    public function getMeetLink(): ?string
    {
        return $this->meetLink;
    }

    public function setMeetLink(?string $meetLink): self
    {
        $this->meetLink = $meetLink;

        return $this;
    }

    public function getImageLink(): ?string
    {
        return $this->imageLink;
    }

    public function setImageLink(?string $imageLink): self
    {
        $this->imageLink = $imageLink;

        return $this;
    }

    public function getCourse(): ?Courses
    {
        return $this->course;
    }

    public function setCourse(?Courses $course): self
    {
        $this->course = $course;

        return $this;
    }

    public function getUser(): ?Users
    {
        return $this->user;
    }

    public function setUser(?Users $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function getResources(): ?Collection
    {
        return $this->resources;
    }

    public function setResources(?Collection $resources): self
    {
        $this->resources = $resources;
        return $this;
    }

    public function addResource(Resources $resource): self
    {
        if (!$this->resources->contains($resource)) {
            $this->resources->add($resource);
            $resource->setSession($this);
        }

        return $this;
    }

    public function removeResource(Resources $resource): self
    {
        if ($this->resources->removeElement($resource)) {
            if ($resource->getSession() === $this) {
                $resource->setSession(null);
            }
        }

        return $this;
    }

    public function getMaxPlaces(): ?int
    {
        return $this->maxPlaces;
    }

    public function setMaxPlaces(int $maxPlaces): self
    {
        $this->maxPlaces = $maxPlaces;

        return $this;
    }
}
