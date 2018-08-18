<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbIndicesValores
 *
 * @ORM\Table(name="tb_indices_valores")
 * @ORM\Entity
 */
class TbIndicesValores
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
     * @ORM\Column(name="id_indices", type="integer", nullable=false)
     */
    private $idIndices;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=11, scale=3, nullable=false)
     */
    private $valor;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_real", type="decimal", precision=11, scale=10, nullable=false)
     */
    private $valorReal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

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
