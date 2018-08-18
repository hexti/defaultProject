<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoEmprestimo
 *
 * @ORM\Table(name="tb_contrato_emprestimo")
 * @ORM\Entity
 */
class TbContratoEmprestimo
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
     * @ORM\Column(name="numero", type="string", length=255, nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_financiamento", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valorFinanciamento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_contrapartida", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valorContrapartida;

    /**
     * @var int
     *
     * @ORM\Column(name="mutuario", type="integer", nullable=false)
     */
    private $mutuario;

    /**
     * @var int
     *
     * @ORM\Column(name="fiador", type="integer", nullable=false)
     */
    private $fiador;

    /**
     * @var int
     *
     * @ORM\Column(name="executor", type="integer", nullable=false)
     */
    private $executor;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_assinatura", type="date", nullable=false)
     */
    private $dataAssinatura;

    /**
     * @var string
     *
     * @ORM\Column(name="prazo_execucao", type="string", length=80, nullable=false)
     */
    private $prazoExecucao;

    /**
     * @var string
     *
     * @ORM\Column(name="prazo_amortizacao", type="string", length=80, nullable=false)
     */
    private $prazoAmortizacao;

    /**
     * @var string
     *
     * @ORM\Column(name="carencia", type="string", length=80, nullable=false)
     */
    private $carencia;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=false)
     */
    private $arquivo;

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
     * @var string
     *
     * @ORM\Column(name="tipo_taxa", type="string", length=0, nullable=false, options={"comment"="F - Fixa, V - V�riavel"})
     */
    private $tipoTaxa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_secretaria", type="integer", nullable=false)
     */
    private $idSecretaria;

    /**
     * @var int
     *
     * @ORM\Column(name="id_moeda", type="integer", nullable=false)
     */
    private $idMoeda;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_agente_financiador", type="integer", nullable=true)
     */
    private $idAgenteFinanciador;


}
