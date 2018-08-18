<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoUniao
 *
 * @ORM\Table(name="tb_contrato_uniao")
 * @ORM\Entity
 */
class TbContratoUniao
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
     * @ORM\Column(name="id_contrato_1", type="integer", nullable=false)
     */
    private $idContrato1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contrato_2", type="integer", nullable=false)
     */
    private $idContrato2;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var int|null
     *
     * @ORM\Column(name="excluido", type="integer", nullable=true)
     */
    private $excluido;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
