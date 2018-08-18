<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbConta
 *
 * @ORM\Table(name="tb_conta")
 * @ORM\Entity
 */
class TbConta
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
     * @var int
     *
     * @ORM\Column(name="id_banco", type="integer", nullable=false)
     */
    private $idBanco;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false, options={"comment"="CM-Conta Mae, CI - Conta Internalizacao, CP - Conta Pagamento"})
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var int|null
     *
     * @ORM\Column(name="agencia", type="integer", nullable=true)
     */
    private $agencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conta", type="string", length=10, nullable=true)
     */
    private $conta;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=0, nullable=false)
     */
    private $descricao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_moeda", type="integer", nullable=false)
     */
    private $idMoeda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="excluido", type="datetime", nullable=true)
     */
    private $excluido;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
