<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbDistribuicaoFaturamento
 *
 * @ORM\Table(name="tb_distribuicao_faturamento")
 * @ORM\Entity
 */
class TbDistribuicaoFaturamento
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
     * @var string|null
     *
     * @ORM\Column(name="valor_medicao", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorMedicao = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_reajuste", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorReajuste = '0.00';

    /**
     * @var string|null
     *
     * @ORM\Column(name="valor_complementar", type="decimal", precision=11, scale=2, nullable=true, options={"default"="0.00"})
     */
    private $valorComplementar = '0.00';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="criado", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $criado = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="finalizado", type="datetime", nullable=true)
     */
    private $finalizado;

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
