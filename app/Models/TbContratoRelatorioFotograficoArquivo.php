<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoRelatorioFotograficoArquivo
 *
 * @ORM\Table(name="tb_contrato_relatorio_fotografico_arquivo")
 * @ORM\Entity
 */
class TbContratoRelatorioFotograficoArquivo
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
     * @ORM\Column(name="id_contrato_relatorio_fotografico", type="integer", nullable=false)
     */
    private $idContratoRelatorioFotografico;

    /**
     * @var string
     *
     * @ORM\Column(name="arquivo", type="string", length=255, nullable=false)
     */
    private $arquivo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="date", nullable=false)
     */
    private $data;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cirado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $cirado = 'CURRENT_TIMESTAMP';

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
