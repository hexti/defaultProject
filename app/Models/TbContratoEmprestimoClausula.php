<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoEmprestimoClausula
 *
 * @ORM\Table(name="tb_contrato_emprestimo_clausula")
 * @ORM\Entity
 */
class TbContratoEmprestimoClausula
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
     * @ORM\Column(name="id_contrato_emprestimo", type="integer", nullable=false)
     */
    private $idContratoEmprestimo;

    /**
     * @var string
     *
     * @ORM\Column(name="clausula", type="string", length=20, nullable=false)
     */
    private $clausula;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", length=0, nullable=false)
     */
    private $descricao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vencimento", type="date", nullable=false)
     */
    private $vencimento;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="concluido", type="date", nullable=true)
     */
    private $concluido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=true)
     */
    private $arquivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="registro_envio", type="string", length=255, nullable=true)
     */
    private $registroEnvio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aprovacao_banco", type="string", length=255, nullable=true)
     */
    private $aprovacaoBanco;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacao", type="text", length=0, nullable=true)
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
     * @var int
     *
     * @ORM\Column(name="dias_alerta", type="integer", nullable=false, options={"default"="1"})
     */
    private $diasAlerta = '1';


}
