<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContrato
 *
 * @ORM\Table(name="tb_contrato")
 * @ORM\Entity
 */
class TbContrato
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
     * @var string
     *
     * @ORM\Column(name="objeto", type="string", length=255, nullable=false)
     */
    private $objeto;

    /**
     * @var string
     *
     * @ORM\Column(name="edital", type="string", length=30, nullable=false)
     */
    private $edital;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valor = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_proposta", type="date", nullable=false)
     */
    private $dataProposta;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publicacao_aviso", type="date", nullable=false)
     */
    private $publicacaoAviso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="sessao_inicial", type="date", nullable=false)
     */
    private $sessaoInicial;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_fim", type="date", nullable=true)
     */
    private $dataFim;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_final_atual", type="date", nullable=true)
     */
    private $dataFinalAtual;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="homologacao_adjudicacao", type="date", nullable=false)
     */
    private $homologacaoAdjudicacao;

    /**
     * @var string
     *
     * @ORM\Column(name="contrato", type="string", length=20, nullable=false)
     */
    private $contrato;

    /**
     * @var string
     *
     * @ORM\Column(name="ordem_servico", type="string", length=80, nullable=false)
     */
    private $ordemServico;

    /**
     * @var int
     *
     * @ORM\Column(name="id_empresa", type="integer", nullable=false)
     */
    private $idEmpresa;

    /**
     * @var string
     *
     * @ORM\Column(name="registro_bid", type="string", length=20, nullable=false)
     */
    private $registroBid;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publicacao_homologacao", type="date", nullable=true)
     */
    private $publicacaoHomologacao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="assinatura", type="date", nullable=true)
     */
    private $assinatura;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="publicacao_extrato", type="date", nullable=true)
     */
    private $publicacaoExtrato;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_os", type="date", nullable=true)
     */
    private $dataOs;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="vigencia", type="date", nullable=true)
     */
    private $vigencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localizacao", type="string", length=255, nullable=true)
     */
    private $localizacao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="prazo_execucao", type="string", length=255, nullable=true)
     */
    private $prazoExecucao;

    /**
     * @var bool
     *
     * @ORM\Column(name="supervisao", type="boolean", nullable=false)
     */
    private $supervisao = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="fiscalizacao", type="boolean", nullable=false)
     */
    private $fiscalizacao = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="coordenacao", type="boolean", nullable=false)
     */
    private $coordenacao = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finalizado", type="datetime", nullable=true)
     */
    private $finalizado;

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

    /**
     * @var int
     *
     * @ORM\Column(name="tem_reajuste", type="integer", nullable=false, options={"default"="1"})
     */
    private $temReajuste = '1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="tipo", type="integer", nullable=true, options={"comment"="1-Obra, 2-Consultoria,3-Bens e Equipamento"})
     */
    private $tipo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="itens_definidos", type="string", length=45, nullable=true, options={"default"="1"})
     */
    private $itensDefinidos = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="renovacao", type="string", length=0, nullable=false, options={"comment"="	1 - Renovacao Anua, 0 - Sem renovacao"})
     */
    private $renovacao = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_internacional", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentualInternacional = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_federal", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentualFederal = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_estadual", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentualEstadual = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="percentual_municipal", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $percentualMunicipal = '0.00';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_secretaria_fiscalizadora", type="integer", nullable=true)
     */
    private $idSecretariaFiscalizadora;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_secretaria_executora", type="integer", nullable=true)
     */
    private $idSecretariaExecutora;

    /**
     * @var string
     *
     * @ORM\Column(name="glosa", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $glosa = 'N';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="inicio_execucao", type="date", nullable=true)
     */
    private $inicioExecucao;

    /**
     * @var int
     *
     * @ORM\Column(name="casas", type="integer", nullable=false, options={"default"="6"})
     */
    private $casas = '6';


}
