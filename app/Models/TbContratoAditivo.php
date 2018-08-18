<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoAditivo
 *
 * @ORM\Table(name="tb_contrato_aditivo")
 * @ORM\Entity
 */
class TbContratoAditivo
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
     * @ORM\Column(name="id_contrato", type="integer", nullable=false)
     */
    private $idContrato;

    /**
     * @var string
     *
     * @ORM\Column(name="prazo", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $prazo = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="itens_servico", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $itensServico = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="clausula", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $clausula = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="objeto_aditivo", type="text", length=0, nullable=false)
     */
    private $objetoAditivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tipo_calculo_data", type="string", length=0, nullable=true)
     */
    private $tipoCalculoData;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantidade_prazo", type="integer", nullable=true)
     */
    private $quantidadePrazo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_final_atual", type="date", nullable=true)
     */
    private $dataFinalAtual;

    /**
     * @var string
     *
     * @ORM\Column(name="reflexo_financeiro", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $reflexoFinanceiro = 'N';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_reflexo_financeiro", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorReflexoFinanceiro = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_aditivo", type="date", nullable=false)
     */
    private $dataAditivo;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_aditivo", type="string", length=20, nullable=false)
     */
    private $numeroAditivo;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=80, nullable=false)
     */
    private $arquivo;

    /**
     * @var string
     *
     * @ORM\Column(name="observacao", type="text", length=0, nullable=false)
     */
    private $observacao;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="vigencia_atual", type="date", nullable=true)
     */
    private $vigenciaAtual;


}
