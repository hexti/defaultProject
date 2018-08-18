<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbUsuario
 *
 * @ORM\Table(name="tb_usuario")
 * @ORM\Entity
 */
class TbUsuario
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
     * @var string
     *
     * @ORM\Column(name="nome_guerra", type="string", length=50, nullable=false)
     */
    private $nomeGuerra;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=255, nullable=false)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=80, nullable=false)
     */
    private $senha;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="date", nullable=false)
     */
    private $criado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editado", type="date", nullable=false)
     */
    private $editado;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=false)
     */
    private $ativo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_pessoa", type="integer", nullable=true)
     */
    private $idPessoa;

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
     * @return string
     */
    public function getNomeGuerra()
    {
        return $this->nomeGuerra;
    }

    /**
     * @param string $nomeGuerra
     */
    public function setNomeGuerra($nomeGuerra)
    {
        $this->nomeGuerra = $nomeGuerra;
    }

    /**
     * @return string
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param string $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return string
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param string $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    /**
     * @return \DateTime
     */
    public function getCriado()
    {
        return $this->criado;
    }

    /**
     * @param \DateTime $criado
     */
    public function setCriado($criado)
    {
        $this->criado = $criado;
    }

    /**
     * @return \DateTime
     */
    public function getEditado()
    {
        return $this->editado;
    }

    /**
     * @param \DateTime $editado
     */
    public function setEditado($editado)
    {
        $this->editado = $editado;
    }

    /**
     * @return string
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param string $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return int|null
     */
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param int|null $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
    }
}
