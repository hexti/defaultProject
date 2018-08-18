<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoUsuario
 *
 * @ORM\Table(name="tb_contrato_usuario")
 * @ORM\Entity
 */
class TbContratoUsuario
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
     * @ORM\Column(name="id_usuario_permissao", type="integer", nullable=false)
     */
    private $idUsuarioPermissao;

    /**
     * @var string
     *
     * @ORM\Column(name="supervisao", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $supervisao = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="fiscalizacao", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $fiscalizacao = 'N';

    /**
     * @var string
     *
     * @ORM\Column(name="coordenacao", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $coordenacao = 'N';

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
