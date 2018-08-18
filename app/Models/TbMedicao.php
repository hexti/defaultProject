<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMedicao
 *
 * @ORM\Table(name="tb_medicao")
 * @ORM\Entity
 */
class TbMedicao
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
     * @var int|null
     *
     * @ORM\Column(name="id_contrato_assinatura", type="integer", nullable=true)
     */
    private $idContratoAssinatura;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false, options={"comment"="G - Global, A - Aditivo, C - Complementar"})
     */
    private $tipo;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_inicio", type="date", nullable=false)
     */
    private $dataInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_fim", type="date", nullable=false)
     */
    private $dataFim;

    /**
     * @var string|null
     *
     * @ORM\Column(name="a_s", type="string", length=80, nullable=true)
     */
    private $aS;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_fim_obra", type="date", nullable=true)
     */
    private $dataFimObra;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prazo_obra", type="string", length=80, nullable=true)
     */
    private $prazoObra;

    /**
     * @var int|null
     *
     * @ORM\Column(name="medicao", type="integer", nullable=true, options={"comment"="1 - Inicial, 2 - Final, 3 - Intermediaria"})
     */
    private $medicao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_aditivos", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorAditivos = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_contratada", type="integer", nullable=true)
     */
    private $idUsuarioContratada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_contratada", type="datetime", nullable=true)
     */
    private $dataContratada;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_supervisao", type="integer", nullable=true)
     */
    private $idUsuarioSupervisao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_supervisao", type="datetime", nullable=true)
     */
    private $dataSupervisao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_fiscalizacao", type="integer", nullable=true)
     */
    private $idUsuarioFiscalizacao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_fiscalizacao", type="datetime", nullable=true)
     */
    private $dataFiscalizacao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_coordenacao", type="integer", nullable=true)
     */
    private $idUsuarioCoordenacao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_coordenacao", type="datetime", nullable=true)
     */
    private $dataCoordenacao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_finalizado", type="datetime", nullable=true)
     */
    private $dataFinalizado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_atualizado", type="datetime", nullable=true)
     */
    private $dataAtualizado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_complementar", type="datetime", nullable=true)
     */
    private $dataComplementar;

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
     * @ORM\Column(name="vigencia", type="date", nullable=true)
     */
    private $vigencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=true)
     */
    private $descricao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arquivo_as", type="string", length=255, nullable=true)
     */
    private $arquivoAs;


}
