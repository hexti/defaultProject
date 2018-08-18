<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbLogEmail
 *
 * @ORM\Table(name="tb_log_email")
 * @ORM\Entity
 */
class TbLogEmail
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
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="assunto", type="string", length=255, nullable=false)
     */
    private $assunto;

    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="text", length=0, nullable=false)
     */
    private $mensagem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_envio", type="datetime", nullable=false)
     */
    private $dataEnvio;

    /**
     * @var string
     *
     * @ORM\Column(name="funcao", type="string", length=255, nullable=false)
     */
    private $funcao;


}
