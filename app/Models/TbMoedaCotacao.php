<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMoedaCotacao
 *
 * @ORM\Table(name="tb_moeda_cotacao")
 * @ORM\Entity
 */
class TbMoedaCotacao
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
     * @ORM\Column(name="id_moeda", type="integer", nullable=false)
     */
    private $idMoeda;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="compra", type="decimal", precision=11, scale=4, nullable=false)
     */
    private $compra;

    /**
     * @var string
     *
     * @ORM\Column(name="venda", type="decimal", precision=11, scale=4, nullable=false)
     */
    private $venda;

    /**
     * @var string
     *
     * @ORM\Column(name="turismo", type="decimal", precision=11, scale=4, nullable=false, options={"default"="1.0000"})
     */
    private $turismo = '1.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="negociavel", type="decimal", precision=11, scale=4, nullable=false, options={"default"="1.0000"})
     */
    private $negociavel = '1.0000';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="criado", type="datetime", nullable=true)
     */
    private $criado;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="excluido", type="datetime", nullable=true)
     */
    private $excluido;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="data_processamento", type="date", nullable=true)
     */
    private $dataProcessamento;


}
