<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbOrcamento
 *
 * @ORM\Table(name="tb_orcamento")
 * @ORM\Entity
 */
class TbOrcamento
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
     * @ORM\Column(name="id_programa", type="integer", nullable=false)
     */
    private $idPrograma;

    /**
     * @var int
     *
     * @ORM\Column(name="id_eap_financeira_programa", type="integer", nullable=false)
     */
    private $idEapFinanceiraPrograma;

    /**
     * @var int
     *
     * @ORM\Column(name="id_moeda", type="integer", nullable=false)
     */
    private $idMoeda;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pmf", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorPmf = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_bid", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorBid = '0.00';

    /**
     * @var int
     *
     * @ORM\Column(name="revisao", type="integer", nullable=false)
     */
    private $revisao;

    /**
     * @var string
     *
     * @ORM\Column(name="principal", type="string", length=0, nullable=false)
     */
    private $principal;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_revisao", type="datetime", nullable=true)
     */
    private $dataRevisao;

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
