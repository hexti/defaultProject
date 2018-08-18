<?php

namespace Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbUsuarioGrupo
 *
 * @ORM\Table(name="tb_usuario_grupo")
 * @ORM\Entity
 */
class TbUsuarioGrupo
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
     * @ORM\Column(name="id_pessoa", type="integer", nullable=false)
     */
    private $idPessoa;

    /**
     * @var int
     *
     * @ORM\Column(name="id_grupo", type="integer", nullable=false)
     */
    private $idGrupo;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_funcionalidade", type="integer", nullable=true)
     */
    private $idFuncionalidade;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="criado", type="datetime", nullable=true, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=1, nullable=false, options={"default"="S"})
     */
    private $ativo = 'S';


}
