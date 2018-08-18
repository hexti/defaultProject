<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoTaxaMedicao
 *
 * @ORM\Table(name="tb_contrato_taxa_medicao")
 * @ORM\Entity
 */
class TbContratoTaxaMedicao
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
     * @ORM\Column(name="id_contrato_taxa", type="integer", nullable=false)
     */
    private $idContratoTaxa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_medicao", type="integer", nullable=false)
     */
    private $idMedicao;

    /**
     * @var string
     *
     * @ORM\Column(name="medido_mes", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $medidoMes = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_acumulado", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorAcumulado = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_saldo", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorSaldo = '0.00';

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
