<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbBancoMovimentacao
 *
 * @ORM\Table(name="tb_banco_movimentacao")
 * @ORM\Entity
 */
class TbBancoMovimentacao
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
     * @ORM\Column(name="valor", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descricao", type="text", length=0, nullable=true)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="operacao", type="string", length=0, nullable=false)
     */
    private $operacao;

    /**
     * @var int
     *
     * @ORM\Column(name="tipo_operacao", type="integer", nullable=false)
     */
    private $tipoOperacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

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
