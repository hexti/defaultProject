<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbInternalizacao
 *
 * @ORM\Table(name="tb_internalizacao")
 * @ORM\Entity
 */
class TbInternalizacao
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
     * @var int|null
     *
     * @ORM\Column(name="valor_internalizacao", type="integer", nullable=true)
     */
    private $valorInternalizacao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="valor_convertido", type="integer", nullable=true)
     */
    private $valorConvertido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="taxa", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $taxa;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="excluido", type="datetime", nullable=true)
     */
    private $excluido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="criado", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_banco_destino", type="integer", nullable=true)
     */
    private $idBancoDestino;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_banco_origem", type="integer", nullable=true)
     */
    private $idBancoOrigem;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_plano_financeiro", type="integer", nullable=false)
     */
    private $idPlanoFinanceiro;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=false)
     */
    private $codigo;


}
