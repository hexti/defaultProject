<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbVisitaAmbientalArquivo
 *
 * @ORM\Table(name="tb_visita_ambiental_arquivo")
 * @ORM\Entity
 */
class TbVisitaAmbientalArquivo
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
     * @ORM\Column(name="id_visita_ambiental", type="integer", nullable=false)
     */
    private $idVisitaAmbiental;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=false)
     */
    private $arquivo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="legenda", type="string", length=255, nullable=true)
     */
    private $legenda;

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
