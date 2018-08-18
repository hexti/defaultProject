<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoEmprestimoUsuario
 *
 * @ORM\Table(name="tb_contrato_emprestimo_usuario")
 * @ORM\Entity
 */
class TbContratoEmprestimoUsuario
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
     * @ORM\Column(name="id_contrato_emprestimo", type="integer", nullable=false)
     */
    private $idContratoEmprestimo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario_permissao", type="integer", nullable=false)
     */
    private $idUsuarioPermissao;

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