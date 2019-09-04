<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRoleHandleRepository")
 */
class UserRoleHandle
{

    /**
     * @ORM\Column(type="integer")
     */
    private $UserId;

    /**
     * @ORM\Column(type="integer")
     */
    private $RoleId;


    public function getUserId(): ?int
    {
        return $this->UserId;
    }

    public function setUserId(int $UserId): self
    {
        $this->UserId = $UserId;

        return $this;
    }

    public function getRoleId(): ?int
    {
        return $this->RoleId;
    }

    public function setRoleId(int $RoleId): self
    {
        $this->RoleId = $RoleId;

        return $this;
    }
}
