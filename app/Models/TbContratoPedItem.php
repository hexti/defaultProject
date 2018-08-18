<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoPedItem
 *
 * @ORM\Table(name="tb_contrato_ped_item")
 * @ORM\Entity
 */
class TbContratoPedItem
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
     * @var int|null
     *
     * @ORM\Column(name="id_contrato_ped", type="integer", nullable=true)
     */
    private $idContratoPed;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=false, options={"default"="EM ANALISE"})
     */
    private $status = 'EM ANALISE';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="excluido", type="date", nullable=true)
     */
    private $excluido;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="criado", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=65535, nullable=true)
     */
    private $comentario;


}
