<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbVisitaAmbiental
 *
 * @ORM\Table(name="tb_visita_ambiental")
 * @ORM\Entity
 */
class TbVisitaAmbiental
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
     * @ORM\Column(name="id_produto", type="integer", nullable=false)
     */
    private $idProduto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comentario", type="text", length=0, nullable=true)
     */
    private $comentario;

    /**
     * @var string
     *
     * @ORM\Column(name="ponto_atencao", type="text", length=0, nullable=false)
     */
    private $pontoAtencao;

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
