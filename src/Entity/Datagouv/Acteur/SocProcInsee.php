<?php

namespace App\Entity\Datagouv\Acteur;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class SocProcInsee.
 *
 * @ORM\Table(name="acteur_profession_socprocinsee")
 * @ORM\Entity(repositoryClass="App\Repository\Datagouv\Acteur\SocProcInseeRepository")
 */
class SocProcInsee
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="catSocPro", type="string", length=255, nullable=true)
     */
    private $catSocPro;

    /**
     * @var string
     *
     * @ORM\Column(name="famSocPro", type="string", length=255, nullable=true)
     */
    private $famSocPro;

    public function getId(): int
    {
        return $this->id;
    }

    public function getCatSocPro(): ?string
    {
        return $this->catSocPro;
    }

    public function setCatSocPro(?string $catSocPro): SocProcInsee
    {
        $this->catSocPro = $catSocPro;

        return $this;
    }

    public function getFamSocPro(): string
    {
        return $this->famSocPro;
    }

    public function setFamSocPro(string $famSocPro): SocProcInsee
    {
        $this->famSocPro = $famSocPro;

        return $this;
    }
}
