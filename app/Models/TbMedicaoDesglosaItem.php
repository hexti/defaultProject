<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMedicaoDesglosaItem
 *
 * @ORM\Table(name="tb_medicao_desglosa_item")
 * @ORM\Entity
 */
class TbMedicaoDesglosaItem
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
     * @ORM\Column(name="id_medicao_desglosa", type="integer", nullable=false)
     */
    private $idMedicaoDesglosa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_medicao_item", type="integer", nullable=false)
     */
    private $idMedicaoItem;

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
     * @ORM\Column(name="valor_reajuste", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorReajuste = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_complementar", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorComplementar = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
