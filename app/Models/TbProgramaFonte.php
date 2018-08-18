<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbProgramaFonte
 *
 * @ORM\Table(name="tb_programa_fonte")
 * @ORM\Entity
 */
class TbProgramaFonte
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
     * @ORM\Column(name="id_programa", type="integer", nullable=true)
     */
    private $idPrograma;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_fonte", type="integer", nullable=true)
     */
    private $idFonte;

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


}
