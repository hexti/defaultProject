<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoAssinatura
 *
 * @ORM\Table(name="tb_contrato_assinatura")
 * @ORM\Entity
 */
class TbContratoAssinatura
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
     * @ORM\Column(name="id_contrato", type="integer", nullable=false)
     */
    private $idContrato;

    /**
     * @var int
     *
     * @ORM\Column(name="id_assinatura_1", type="integer", nullable=false)
     */
    private $idAssinatura1;

    /**
     * @var int
     *
     * @ORM\Column(name="id_assinatura_2", type="integer", nullable=false)
     */
    private $idAssinatura2;

    /**
     * @var int
     *
     * @ORM\Column(name="id_assinatura_3", type="integer", nullable=false)
     */
    private $idAssinatura3;

    /**
     * @var int
     *
     * @ORM\Column(name="id_assinatura_4", type="integer", nullable=false)
     */
    private $idAssinatura4;

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
