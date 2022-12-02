<?php

namespace App\Entity;

use App\Repository\PermissionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PermissionRepository::class)]
class Permission
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?bool $suppCompte = null;

    #[ORM\Column]
    private ?bool $suppMsg = null;

    #[ORM\Column]
    private ?bool $changeMdp = null;

    #[ORM\Column]
    private ?bool $changeEmail = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function isSuppCompte(): ?bool
    {
        return $this->suppCompte;
    }

    public function setSuppCompte(bool $suppCompte): self
    {
        $this->suppCompte = $suppCompte;

        return $this;
    }

    public function isSuppMsg(): ?bool
    {
        return $this->suppMsg;
    }

    public function setSuppMsg(bool $suppMsg): self
    {
        $this->suppMsg = $suppMsg;

        return $this;
    }

    public function isChangeMdp(): ?bool
    {
        return $this->changeMdp;
    }

    public function setChangeMdp(bool $changeMdp): self
    {
        $this->changeMdp = $changeMdp;

        return $this;
    }

    public function isChangeEmail(): ?bool
    {
        return $this->changeEmail;
    }

    public function setChangeEmail(bool $changeEmail): self
    {
        $this->changeEmail = $changeEmail;

        return $this;
    }
}
