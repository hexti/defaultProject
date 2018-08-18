<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPlanoFinanceiro
 *
 * @ORM\Table(name="tb_plano_financeiro")
 * @ORM\Entity
 */
class TbPlanoFinanceiro
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
     * @ORM\Column(name="id_pedido_desembolso", type="integer", nullable=false)
     */
    private $idPedidoDesembolso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_programa", type="integer", nullable=false)
     */
    private $idPrograma;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_base", type="date", nullable=false)
     */
    private $dataBase;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_1", type="date", nullable=true)
     */
    private $ref1;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_2", type="date", nullable=true)
     */
    private $ref2;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_3", type="date", nullable=true)
     */
    private $ref3;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_4", type="date", nullable=true)
     */
    private $ref4;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_5", type="date", nullable=true)
     */
    private $ref5;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="ref_6", type="date", nullable=true)
     */
    private $ref6;

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

    /**
     * @var int
     *
     * @ORM\Column(name="quantidade_periodo", type="integer", nullable=false, options={"default"="4"})
     */
    private $quantidadePeriodo = '4';


}
