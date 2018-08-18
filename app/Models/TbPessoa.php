<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPessoa
 *
 * @ORM\Table(name="tb_pessoa")
 * @ORM\Entity
 */
class TbPessoa
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
     * @ORM\Column(name="nome_completo", type="string", length=255, nullable=false)
     */
    private $nomeCompleto;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false)
     */
    private $criado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="editado", type="datetime", nullable=false)
     */
    private $editado;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=false)
     */
    private $ativo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cargo", type="integer", nullable=false)
     */
    private $idCargo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pessoa", type="integer", nullable=false, options={"comment"="Usuario que cadastrou"})
     */
    private $idPessoa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tipo_contratacao", type="integer", nullable=true, options={"default"="1"})
     */
    private $tipoContratacao = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="id_setor", type="integer", nullable=false)
     */
    private $idSetor;

    /**
     * @var int|null
     *
     * @ORM\Column(name="matricula", type="integer", nullable=true)
     */
    private $matricula;


}
