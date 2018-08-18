<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDistribuicaoFaturamentoItem
 *
 * @ORM\Table(name="tb_distribuicao_faturamento_item")
 * @ORM\Entity
 */
class TbDistribuicaoFaturamentoItem
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
     * @ORM\Column(name="id_distribuicao_faturamento", type="integer", nullable=false)
     */
    private $idDistribuicaoFaturamento;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_eap_financeira_programa", type="integer", nullable=true)
     */
    private $idEapFinanceiraPrograma;

    /**
     * @var int
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     */
    private $idProduto;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=true)
     */
    private $idEmpresa;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tipo_pagamento", type="integer", nullable=true)
     */
    private $idTipoPagamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=true)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="A","comment"="A - Aguardando Distribuicao, E - Em processamento para pagamento, F - Finalizado"})
     */
    private $status = 'A';

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valor = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pago", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorPago = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="num_documento", type="string", length=11, nullable=false)
     */
    private $numDocumento;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_emissao_doc", type="date", nullable=true)
     */
    private $dataEmissaoDoc;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_distribuicao", type="datetime", nullable=true)
     */
    private $dataDistribuicao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_envio_pagamento", type="datetime", nullable=true)
     */
    private $dataEnvioPagamento;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
