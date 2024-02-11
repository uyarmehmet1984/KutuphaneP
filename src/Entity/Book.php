<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\BookRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Mapping as ORM;

use function PHPSTORM_META\type;

#[ORM\Entity(repositoryClass: BookRepository::class)]
#[ApiResource()]
class Book
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $ad = null;

    #[ORM\Column(length: 255)]
    private ?string $yazar = null;

    #[ORM\Column(type:Types::SMALLINT)]
    private ?int $sayfaSayisi = null;

    #[ORM\Column(type: Types::BIGINT)]
    private ?string $ISBN = null;

    #[ORM\ManyToMany(targetEntity: Borrowedbook::class, mappedBy: 'book')]
    private Collection $borrowedbooks;

    #[ORM\Column]
    private ?int $Sayi = null;

    public function __construct()
    {
        $this->borrowedbooks = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAd(): ?string
    {
        return $this->ad;
    }

    public function setAd(string $ad): static
    {
        $this->ad = $ad;

        return $this;
    }

    public function getYazar(): ?string
    {
        return $this->yazar;
    }

    public function setYazar(string $yazar): static
    {
        $this->yazar = $yazar;

        return $this;
    }

    public function getSayfaSayisi(): ?int
    {
        return $this->sayfaSayisi;
    }

    public function setSayfaSayisi(int $sayfaSayisi): static
    {
        $this->sayfaSayisi = $sayfaSayisi;

        return $this;
    }

    public function getISBN(): ?string
    {
        return $this->ISBN;
    }

    public function setISBN(string $ISBN): static
    {
        $this->ISBN = $ISBN;

        return $this;
    }

    /**
     * @return Collection<int, Borrowedbook>
     */
    public function getBorrowedbooks(): Collection
    {
        return $this->borrowedbooks;
    }

    public function addBorrowedbook(Borrowedbook $borrowedbook): static
    {
        if (!$this->borrowedbooks->contains($borrowedbook)) {
            $this->borrowedbooks->add($borrowedbook);
            $borrowedbook->addBook($this);
        }

        return $this;
    }

    public function removeBorrowedbook(Borrowedbook $borrowedbook): static
    {
        if ($this->borrowedbooks->removeElement($borrowedbook)) {
            $borrowedbook->removeBook($this);
        }

        return $this;
    }

    public function getSayi(): ?int
    {
        return $this->Sayi;
    }

    public function setSayi(int $Sayi): static
    {
        $this->Sayi = $Sayi;

        return $this;
    }
    public function decreaseQuantity()
    {
        $this->Sayi -= 1;
    }
 
}
