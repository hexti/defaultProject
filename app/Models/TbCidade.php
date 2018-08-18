<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbCidade
 *
 * @ORM\Table(name="tb_cidade", indexes={@ORM\Index(name="fk_Cidade_estado", columns={"tb_estado"})})
 * @ORM\Entity
 */
class TbCidade
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
     * @var string|null
     *
     * @ORM\Column(name="nome", type="string", length=120, nullable=true)
     */
    private $nome;

    /**
     * @var int|null
     *
     * @ORM\Column(name="tb_estado", type="integer", nullable=true)
     */
    private $tbEstado;


}
