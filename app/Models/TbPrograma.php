<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPrograma
 *
 * @ORM\Table(name="tb_programa")
 * @ORM\Entity
 */
class TbPrograma
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=10, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="agente_financiador", type="string", length=255, nullable=false)
     */
    private $agenteFinanciador;

    /**
     * @var int
     *
     * @ORM\Column(name="glosa", type="integer", nullable=false)
     */
    private $glosa;

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
     * @var int|null
     *
     * @ORM\Column(name="id_programa_modalidade", type="integer", nullable=true)
     */
    private $idProgramaModalidade;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_tipo_programa", type="integer", nullable=true)
     */
    private $idTipoPrograma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_organizacao", type="integer", nullable=true)
     */
    private $idOrganizacao;


}
