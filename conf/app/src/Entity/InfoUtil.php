<?php

namespace App\Entity;

use App\Repository\InfoUtilRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: InfoUtilRepository::class)]
class InfoUtil
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 20)]
    private ?string $nom = null;

    #[ORM\Column(length: 20)]
    private ?string $prenom = null;

    #[ORM\Column(length: 75)]
    private ?string $email = null;

    #[ORM\Column]
    private ?bool $majeur = null;

    #[ORM\Column]
    private ?int $idProfil = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $numTelephone = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function isMajeur(): ?bool
    {
        return $this->majeur;
    }

    public function setMajeur(bool $majeur): self
    {
        $this->majeur = $majeur;

        return $this;
    }

    public function getIdProfil(): ?int
    {
        return $this->idProfil;
    }

    public function setIdProfil(int $idProfil): self
    {
        $this->idProfil = $idProfil;

        return $this;
    }

    public function getNumTelephone(): ?int
    {
        return $this->numTelephone;
    }

    public function setNumTelephone(int $numTelephone): self
    {
        $this->numTelephone = $numTelephone;

        return $this;
    }
}
