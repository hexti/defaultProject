<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEstadoExecucaoItem
 *
 * @ORM\Table(name="tb_estado_execucao_item")
 * @ORM\Entity
 */
class TbEstadoExecucaoItem
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
     * @ORM\Column(name="id_estado_execucao", type="integer", nullable=false)
     */
    private $idEstadoExecucao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_eap_financeira_programa", type="integer", nullable=false)
     */
    private $idEapFinanceiraPrograma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_orcamento", type="integer", nullable=true)
     */
    private $idOrcamento;

    /**
     * @var int
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vigente_bid", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $vigenteBid = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="vigente_pmf", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $vigentePmf = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acumulado_anterior_bid", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $acumuladoAnteriorBid = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="acumulado_anterior_pmf", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $acumuladoAnteriorPmf = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="prestacao_bid", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $prestacaoBid = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="prestacao_pmf", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $prestacaoPmf = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="acumulado_bid", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $acumuladoBid = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="acumulado_pmf", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $acumuladoPmf = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="saldo_bid", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $saldoBid = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="saldo_pmf", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $saldoPmf = '0.00';

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
