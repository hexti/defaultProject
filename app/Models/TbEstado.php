<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEstado
 *
 * @ORM\Table(name="tb_estado", indexes={@ORM\Index(name="fk_Estado_pais", columns={"tb_pais"})})
 * @ORM\Entity
 */
class TbEstado
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nome", type="string", length=75, nullable=true)
     */
    private $nome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="uf", type="string", length=5, nullable=true)
     */
    private $uf;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tb_pais", type="integer", nullable=true)
     */
    private $tbPais;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return null|string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param null|string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return null|string
     */
    public function getUf()
    {
        return $this->uf;
    }

    /**
     * @param null|string $uf
     */
    public function setUf($uf)
    {
        $this->uf = $uf;
    }

    /**
     * @return int|null
     */
    public function getTbPais()
    {
        return $this->tbPais;
    }

    /**
     * @param int|null $tbPais
     */
    public function setTbPais($tbPais)
    {
        $this->tbPais = $tbPais;
    }
}
