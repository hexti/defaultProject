<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPagamentoValores
 *
 * @ORM\Table(name="tb_pagamento_valores")
 * @ORM\Entity
 */
class TbPagamentoValores
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
     * @ORM\Column(name="id_pedido_desembolso", type="integer", nullable=true)
     */
    private $idPedidoDesembolso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pagamento", type="integer", nullable=false)
     */
    private $idPagamento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_pagamento", type="date", nullable=true)
     */
    private $dataPagamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tipo_pagamento", type="integer", nullable=true)
     */
    private $idTipoPagamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota_liquidacao", type="string", length=20, nullable=true)
     */
    private $notaLiquidacao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nota_empenho", type="string", length=20, nullable=true)
     */
    private $notaEmpenho;

    /**
     * @var string|null
     *
     * @ORM\Column(name="num_processo_pagamento", type="string", length=20, nullable=true)
     */
    private $numProcessoPagamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_fonte_pagamento", type="integer", nullable=true)
     */
    private $idFontePagamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_conta", type="integer", nullable=true)
     */
    private $idConta;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda", type="integer", nullable=true)
     */
    private $idMoeda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda_cotacao", type="integer", nullable=true)
     */
    private $idMoedaCotacao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_pago", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorPago = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="saldo", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $saldo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_pago_convertido", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $valorPagoConvertido;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_objeto_pagamento", type="integer", nullable=true)
     */
    private $idObjetoPagamento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="pagamento", type="datetime", nullable=true)
     */
    private $pagamento;

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
