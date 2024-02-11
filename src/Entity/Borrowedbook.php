<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BorrowedbookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BorrowedbookRepository::class)]
#[ApiResource()]
class Borrowedbook
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Book::class, inversedBy: 'borrowedbooks')]
    private Collection $book;
    

    #[ORM\ManyToOne(inversedBy: 'borrowedbooks')]
    private ?User $user = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $alisTarihi = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $iadeTarihi = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $BarkodNo = null;

    public function __construct()
    {
        $this->book = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Book>
     */
    public function getBook(): Collection
    {
        return $this->book;
    }

    public function addBook(Book $book): static
    {
        if (!$this->book->contains($book)) {
            $this->book->add($book);
        }

        return $this;
    }

    public function removeBook(Book $book): static
    {
        $this->book->removeElement($book);

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getAlisTarihi(): ?\DateTimeInterface
    {
        return $this->alisTarihi;
    }

    public function setAlisTarihi(\DateTimeInterface $alisTarihi): static
    {
        $this->alisTarihi = $alisTarihi;

        return $this;
    }

    public function getIadeTarihi(): ?\DateTimeInterface
    {
        return $this->iadeTarihi;
    }

    public function setIadeTarihi(?\DateTimeInterface $iadeTarihi): static
    {
        $this->iadeTarihi = $iadeTarihi;

        return $this;
    }

    public function getBarkodNo(): ?string
    {
        return $this->BarkodNo;
    }

    public function setBarkodNo(string $BarkodNo): static
    {
        $this->BarkodNo = $BarkodNo;

        return $this;
    }
}
