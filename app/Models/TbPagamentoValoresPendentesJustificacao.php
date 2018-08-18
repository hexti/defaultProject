<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbPagamentoValoresPendentesJustificacao
 *
 * @ORM\Table(name="tb_pagamento_valores_pendentes_justificacao")
 * @ORM\Entity
 */
class TbPagamentoValoresPendentesJustificacao
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
     * @ORM\Column(name="id_pedido_desembolso", type="integer", nullable=false)
     */
    private $idPedidoDesembolso;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pagamento_valores", type="integer", nullable=false)
     */
    private $idPagamentoValores;

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
