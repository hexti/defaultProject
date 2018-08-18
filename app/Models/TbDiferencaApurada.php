<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDiferencaApurada
 *
 * @ORM\Table(name="tb_diferenca_apurada")
 * @ORM\Entity
 */
class TbDiferencaApurada
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
     * @ORM\Column(name="id_tipo_diferenca", type="integer", nullable=false)
     */
    private $idTipoDiferenca;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pedido_desembolso", type="integer", nullable=false)
     */
    private $idPedidoDesembolso;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var int
     *
     * @ORM\Column(name="id_moeda_local", type="integer", nullable=false)
     */
    private $idMoedaLocal;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_local", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valorLocal;

    /**
     * @var int
     *
     * @ORM\Column(name="id_moeda_financiamento", type="integer", nullable=false)
     */
    private $idMoedaFinanciamento;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_financiamento", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valorFinanciamento;

    /**
     * @var string
     *
     * @ORM\Column(name="taxa_cambio", type="decimal", precision=11, scale=4, nullable=false)
     */
    private $taxaCambio;

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
