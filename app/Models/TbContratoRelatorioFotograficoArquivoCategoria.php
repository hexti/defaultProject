<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbContratoRelatorioFotograficoArquivoCategoria
 *
 * @ORM\Table(name="tb_contrato_relatorio_fotografico_arquivo_categoria")
 * @ORM\Entity
 */
class TbContratoRelatorioFotograficoArquivoCategoria
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
     * @ORM\Column(name="id_contrato_relatorio_fotografico_arquivo", type="integer", nullable=false)
     */
    private $idContratoRelatorioFotograficoArquivo;

    /**
     * @var int
     *
     * @ORM\Column(name="id_categoria_relatorio_fotografico", type="integer", nullable=false)
     */
    private $idCategoriaRelatorioFotografico;

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
