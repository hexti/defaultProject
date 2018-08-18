<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDocumento
 *
 * @ORM\Table(name="tb_documento")
 * @ORM\Entity
 */
class TbDocumento
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
     * @ORM\Column(name="id_documento_eap", type="integer", nullable=false)
     */
    private $idDocumentoEap;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento_area", type="integer", nullable=false)
     */
    private $idDocumentoArea;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento_subarea", type="integer", nullable=false)
     */
    private $idDocumentoSubarea;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento_tipo", type="integer", nullable=false)
     */
    private $idDocumentoTipo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento_origem", type="integer", nullable=false)
     */
    private $idDocumentoOrigem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_documento_fase", type="integer", nullable=false)
     */
    private $idDocumentoFase;

    /**
     * @var string
     *
     * @ORM\Column(name="revisao", type="string", length=1, nullable=false)
     */
    private $revisao;

    /**
     * @var string
     *
     * @ORM\Column(name="sequencial", type="string", length=4, nullable=false)
     */
    private $sequencial;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=false)
     */
    private $arquivo;

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
