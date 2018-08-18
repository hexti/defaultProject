<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbNotificacao
 *
 * @ORM\Table(name="tb_notificacao")
 * @ORM\Entity
 */
class TbNotificacao
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
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=255, nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link;

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=20, nullable=false)
     */
    private $icone;

    /**
     * @var string
     *
     * @ORM\Column(name="cor", type="string", length=40, nullable=false)
     */
    private $cor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="target", type="string", length=20, nullable=true)
     */
    private $target;

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
     * @var \DateTime|null
     *
     * @ORM\Column(name="visualizado", type="datetime", nullable=true)
     */
    private $visualizado;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;


}
