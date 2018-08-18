<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEapFinanceiraPlanoFinanceiro
 *
 * @ORM\Table(name="tb_eap_financeira_plano_financeiro")
 * @ORM\Entity
 */
class TbEapFinanceiraPlanoFinanceiro
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
     * @ORM\Column(name="id_pai", type="integer", nullable=false)
     */
    private $idPai;

    /**
     * @var int
     *
     * @ORM\Column(name="id_eap_financeira", type="integer", nullable=false)
     */
    private $idEapFinanceira;

    /**
     * @var int
     *
     * @ORM\Column(name="id_plano_financeiro", type="integer", nullable=false)
     */
    private $idPlanoFinanceiro;

    /**
     * @var int
     *
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     */
    private $idProduto;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=20, nullable=false)
     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=false)
     */
    private $descricao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_1", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mes1 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_2", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mes2 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_3", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mes3 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_4", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mes4 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_5", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mes5 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="mes_6", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $mes6 = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="aporte_local", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $aporteLocal = '0.00';

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


}
