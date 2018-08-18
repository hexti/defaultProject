<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMedicaoDesglosa
 *
 * @ORM\Table(name="tb_medicao_desglosa")
 * @ORM\Entity
 */
class TbMedicaoDesglosa
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
     * @ORM\Column(name="id_medicao", type="integer", nullable=false)
     */
    private $idMedicao;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=255, nullable=false)
     */
    private $numero;

    /**
     * @var string|null
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=true)
     */
    private $arquivo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contratada", type="integer", nullable=false)
     */
    private $idContratada;

    /**
     * @var int
     *
     * @ORM\Column(name="id_supervisao", type="integer", nullable=false)
     */
    private $idSupervisao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_fiscalizacao", type="integer", nullable=false)
     */
    private $idFiscalizacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_coordenacao", type="integer", nullable=false)
     */
    private $idCoordenacao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finalizado", type="datetime", nullable=true)
     */
    private $finalizado;

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
