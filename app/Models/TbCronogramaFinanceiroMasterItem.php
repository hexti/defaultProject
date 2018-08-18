<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCronogramaFinanceiroMasterItem
 *
 * @ORM\Table(name="tb_cronograma_financeiro_master_item")
 * @ORM\Entity
 */
class TbCronogramaFinanceiroMasterItem
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
     * @ORM\Column(name="id_cronograma_financeiro_master", type="integer", nullable=false)
     */
    private $idCronogramaFinanceiroMaster;

    /**
     * @var int
     *
     * @ORM\Column(name="id_eap_financeira", type="integer", nullable=false)
     */
    private $idEapFinanceira;

    /**
     * @var int
     *
     * @ORM\Column(name="id_fonte_pagamento_pmf", type="integer", nullable=false)
     */
    private $idFontePagamentoPmf = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_fonte_pagamento_bid", type="integer", nullable=false)
     */
    private $idFontePagamentoBid = '0';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data", type="date", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pmf", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorPmf = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_bid", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorBid = '0.00';

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
