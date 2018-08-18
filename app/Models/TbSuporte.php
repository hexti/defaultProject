<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbSuporte
 *
 * @ORM\Table(name="tb_suporte")
 * @ORM\Entity
 */
class TbSuporte
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="criado", type="datetime", nullable=true)
     */
    private $criado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mensagem", type="text", length=65535, nullable=true)
     */
    private $mensagem;

    /**
     * @var string|null
     *
     * @ORM\Column(name="modulo", type="string", length=255, nullable=true)
     */
    private $modulo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="usuario", type="string", length=65, nullable=true)
     */
    private $usuario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_tecnico", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $idUsuarioTecnico;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_finalizado", type="datetime", nullable=true)
     */
    private $dataFinalizado;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=true)
     */
    private $arquivo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="telefone", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $telefone;


}
