<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoPed
 *
 * @ORM\Table(name="tb_contrato_ped")
 * @ORM\Entity
 */
class TbContratoPed
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
     * @ORM\Column(name="id_entrega", type="integer", nullable=true)
     */
    private $idEntrega;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=50, nullable=true, options={"default"="EM ANALISE"})
     */
    private $status = 'EM ANALISE';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="criado", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="excluido", type="datetime", nullable=true)
     */
    private $excluido;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descricao", type="text", length=65535, nullable=true)
     */
    private $descricao;


}
