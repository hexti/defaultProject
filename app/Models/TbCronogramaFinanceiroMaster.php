<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCronogramaFinanceiroMaster
 *
 * @ORM\Table(name="tb_cronograma_financeiro_master")
 * @ORM\Entity
 */
class TbCronogramaFinanceiroMaster
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
     * @ORM\Column(name="revisao", type="integer", nullable=false)
     */
    private $revisao;

    /**
     * @var string
     *
     * @ORM\Column(name="obsoleto", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $obsoleto = 'N';

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
