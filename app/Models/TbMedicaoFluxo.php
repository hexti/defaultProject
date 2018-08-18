<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMedicaoFluxo
 *
 * @ORM\Table(name="tb_medicao_fluxo")
 * @ORM\Entity
 */
class TbMedicaoFluxo
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
     * @ORM\Column(name="tipo", type="string", length=0, nullable=false, options={"default"="P0"})
     */
    private $tipo = 'P0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_contratada", type="integer", nullable=true)
     */
    private $idUsuarioContratada;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_supervisao", type="integer", nullable=true)
     */
    private $idUsuarioSupervisao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_fiscalizacao", type="integer", nullable=true)
     */
    private $idUsuarioFiscalizacao;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario_coordenacao", type="integer", nullable=true)
     */
    private $idUsuarioCoordenacao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_contratada", type="datetime", nullable=true)
     */
    private $dataContratada;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_supervisao", type="datetime", nullable=true)
     */
    private $dataSupervisao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_fiscalizacao", type="datetime", nullable=true)
     */
    private $dataFiscalizacao;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_coordenacao", type="datetime", nullable=true)
     */
    private $dataCoordenacao;

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
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
