<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMedicaoItem
 *
 * @ORM\Table(name="tb_medicao_item")
 * @ORM\Entity
 */
class TbMedicaoItem
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
     * @ORM\Column(name="id_medicao", type="integer", nullable=false)
     */
    private $idMedicao;

    /**
     * @var int
     *
     * @ORM\Column(name="id_contrato_item", type="integer", nullable=false)
     */
    private $idContratoItem;

    /**
     * @var int
     *
     * @ORM\Column(name="id_indices_valores", type="integer", nullable=false)
     */
    private $idIndicesValores;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_indice", type="decimal", precision=11, scale=10, nullable=false, options={"default"="0.0000000000"})
     */
    private $valorIndice = '0.0000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_indice_definitivo", type="decimal", precision=11, scale=10, nullable=false, options={"default"="0.0000000000"})
     */
    private $valorIndiceDefinitivo = '0.0000000000';

    /**
     * @var int
     *
     * @ORM\Column(name="id_indices_valores_definitivo", type="integer", nullable=false)
     */
    private $idIndicesValoresDefinitivo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade", type="decimal", precision=11, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $quantidade = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_acumulado", type="decimal", precision=11, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $quantidadeAcumulado = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_saldo", type="decimal", precision=11, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $quantidadeSaldo = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_glosa", type="decimal", precision=11, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $quantidadeGlosa = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="quantidade_acumulado_glosa", type="decimal", precision=11, scale=4, nullable=false, options={"default"="0.0000"})
     */
    private $quantidadeAcumuladoGlosa = '0.0000';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_reajuste", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorReajuste = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_complementar", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorComplementar = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_complementar_diferenca", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorComplementarDiferenca = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="medido_mes", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $medidoMes = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_acumulado", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorAcumulado = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_saldo", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorSaldo = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="medido_mes_diferenca", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $medidoMesDiferenca;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_acumulado_diferenca", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valorAcumuladoDiferenca;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_saldo_diferenca", type="decimal", precision=11, scale=2, nullable=false)
     */
    private $valorSaldoDiferenca;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_reajuste_diferenca", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorReajusteDiferenca = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="medido_mes_glosa", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $medidoMesGlosa = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_acumulado_glosa", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorAcumuladoGlosa = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_pago_glosa", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorPagoGlosa = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_reajuste_glosa", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorReajusteGlosa = '0.00';

    /**
     * @var string
     *
     * @ORM\Column(name="valor_complementar_glosa", type="decimal", precision=11, scale=2, nullable=false, options={"default"="0.00"})
     */
    private $valorComplementarGlosa = '0.00';

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
