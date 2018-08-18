<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPedidoDesembolso
 *
 * @ORM\Table(name="tb_pedido_desembolso")
 * @ORM\Entity
 */
class TbPedidoDesembolso
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
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="num_referencia", type="string", length=40, nullable=false)
     */
    private $numReferencia;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_emissao", type="date", nullable=true)
     */
    private $dataEmissao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_modalidade", type="integer", nullable=false)
     */
    private $idModalidade;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mes_ano_referencia", type="date", nullable=false)
     */
    private $mesAnoReferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="mes", type="string", length=20, nullable=false)
     */
    private $mes;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda_adiantamento_solicitada", type="integer", nullable=true)
     */
    private $idMoedaAdiantamentoSolicitada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_adiantamento_solicitada", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $valorAdiantamentoSolicitada;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda_solicitada", type="integer", nullable=true)
     */
    private $idMoedaSolicitada;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_moeda_solicitada", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $valorMoedaSolicitada;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda_operacao", type="integer", nullable=true)
     */
    private $idMoedaOperacao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_moeda_operacao", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $valorMoedaOperacao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda_saldo_adiantamento", type="integer", nullable=true)
     */
    private $idMoedaSaldoAdiantamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_moeda_saldo_adiantamento", type="decimal", precision=11, scale=2, nullable=true)
     */
    private $valorMoedaSaldoAdiantamento;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reembolso_pagamentos_efetuados", type="string", length=0, nullable=true)
     */
    private $reembolsoPagamentosEfetuados;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pagamento_direto_fornecedor", type="string", length=0, nullable=true)
     */
    private $pagamentoDiretoFornecedor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adiantamento_recurso", type="string", length=0, nullable=true)
     */
    private $adiantamentoRecurso;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prestacao_contas", type="string", length=0, nullable=true, options={"default"="N"})
     */
    private $prestacaoContas = 'N';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_banco_intermediario", type="integer", nullable=true)
     */
    private $idBancoIntermediario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_banco_depositario", type="integer", nullable=true)
     */
    private $idBancoDepositario;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_banco_beneficiario", type="integer", nullable=true)
     */
    private $idBancoBeneficiario;

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
     * @ORM\Column(name="processamento", type="datetime", nullable=true)
     */
    private $processamento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finalizado", type="datetime", nullable=true)
     */
    private $finalizado;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var int
     *
     * @ORM\Column(name="id_assinatura_1", type="integer", nullable=false)
     */
    private $idAssinatura1 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_assinatura_2", type="integer", nullable=false)
     */
    private $idAssinatura2 = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_programa", type="integer", nullable=false)
     */
    private $idPrograma;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contrato_emprestimo", type="integer", nullable=false)
     */
    private $idContratoEmprestimo;


}
