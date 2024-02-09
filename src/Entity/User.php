<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180, unique: true)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    /**
     * @var string The hashed password
     */
    #[ORM\Column]
    private ?string $password = null;


    #[ORM\Column(nullable: true)]
    private ?string $ad = null;

    #[ORM\Column(nullable: true)]
    private ?string $soyad = null;

    #[ORM\Column(nullable: true)]
    private ?string $address = null;

    #[ORM\Column(nullable: true)]
    private ?string $telefon = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }
    private ?string $plainPassword = null;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Borrowedbook::class)]
    private Collection $borrowedbooks;

    public function __construct()
    {
        $this->borrowedbooks = new ArrayCollection();
    }

    // ...

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }

    public function setPlainPassword(?string $plainPassword): self
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }
    public function getAd(): ?string
    {
        return $this->ad;
    }

    public function setAd(?string $ad): static
    {
        $this->ad = $ad;

        return $this;
    }

    public function getSoyad(): ?string
    {
        return $this->soyad;
    }

    public function setSoyad(?string $soyad): static
    {
        $this->soyad = $soyad;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getTelefon(): ?string
    {
        return $this->telefon;
    }

    public function setTelefon(?string $telefon): static
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
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
            $borrowedbook->setUser($this);
        }

        return $this;
    }

    public function removeBorrowedbook(Borrowedbook $borrowedbook): static
    {
        if ($this->borrowedbooks->removeElement($borrowedbook)) {
            // set the owning side to null (unless already changed)
            if ($borrowedbook->getUser() === $this) {
                $borrowedbook->setUser(null);
            }
        }

        return $this;
    }
}
