<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPais
 *
 * @ORM\Table(name="tb_pais")
 * @ORM\Entity
 */
class TbPais
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
     * @ORM\Column(name="nome", type="string", length=60, nullable=true)
     */
    private $nome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sigla", type="string", length=10, nullable=true)
     */
    private $sigla;


}
