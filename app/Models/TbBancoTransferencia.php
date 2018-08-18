<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbBancoTransferencia
 *
 * @ORM\Table(name="tb_banco_transferencia")
 * @ORM\Entity
 */
class TbBancoTransferencia
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
     * @ORM\Column(name="id_banco_movimentacao", type="integer", nullable=false)
     */
    private $idBancoMovimentacao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_banco_origem", type="integer", nullable=false)
     */
    private $idBancoOrigem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_banco_destino", type="integer", nullable=false)
     */
    private $idBancoDestino;

    /**
     * @var string
     *
     * @ORM\Column(name="valor", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $valor;

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_convertido", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorConvertido = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="cotacao", type="decimal", precision=11, scale=4, nullable=true, options={"default"="0.0000"})
     */
    private $cotacao = '0.0000';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
