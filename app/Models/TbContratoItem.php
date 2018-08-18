<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoItem
 *
 * @ORM\Table(name="tb_contrato_item")
 * @ORM\Entity
 */
class TbContratoItem
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
     * @ORM\Column(name="id_unidade", type="integer", nullable=false)
     */
    private $idUnidade = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_contrato", type="integer", nullable=false)
     */
    private $idContrato;

    /**
     * @var int
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     */
    private $idProduto;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pai", type="integer", nullable=false)
     */
    private $idPai = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="id_indice", type="integer", nullable=false)
     */
    private $idIndice;

    /**
     * @var int
     *
     * @ORM\Column(name="versao", type="integer", nullable=false, options={"default"="1"})
     */
    private $versao = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="obsoleto", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $obsoleto = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="e_taxa", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $eTaxa = 'N';

    /**
     * @var int
     *
     * @ORM\Column(name="nivel", type="integer", nullable=false)
     */
    private $nivel;

    /**
     * @var int
     *
     * @ORM\Column(name="ordem", type="integer", nullable=false)
     */
    private $ordem;

    /**
     * @var string
     *
     * @ORM\Column(name="ordem_atualizada", type="string", length=80, nullable=false)
     */
    private $ordemAtualizada;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=11, scale=4, nullable=false)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_total", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorTotal = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_taxa", type="decimal", precision=11, scale=9, nullable=false, options={"default"="0.000000000"})
     */
    private $valorTaxa = '0.000000000';

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


}
