<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPlanoFinanceiroItem
 *
 * @ORM\Table(name="tb_plano_financeiro_item")
 * @ORM\Entity
 */
class TbPlanoFinanceiroItem
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
     * @ORM\Column(name="id_plano_financeiro", type="integer", nullable=false)
     */
    private $idPlanoFinanceiro;

    /**
     * @var int
     *
     * @ORM\Column(name="id_eap_financeira", type="integer", nullable=false)
     */
    private $idEapFinanceira;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contrato", type="integer", nullable=false)
     */
    private $idContrato;

    /**
     * @var int
     *
     * @ORM\Column(name="id_fonte_pagamento_bid", type="integer", nullable=false)
     */
    private $idFontePagamentoBid;

    /**
     * @var int
     *
     * @ORM\Column(name="id_fonte_pagamento_pmf", type="integer", nullable=false)
     */
    private $idFontePagamentoPmf;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_bid", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorBid = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pmf", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorPmf = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="id_conciliacao", type="integer", nullable=false, options={"default"="1"})
     */
    private $idConciliacao = '1';

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
