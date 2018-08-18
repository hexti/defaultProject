<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbMedicaoFluxoProcesso
 *
 * @ORM\Table(name="tb_medicao_fluxo_processo")
 * @ORM\Entity
 */
class TbMedicaoFluxoProcesso
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
     * @ORM\Column(name="id_medicao_fluxo", type="integer", nullable=false)
     */
    private $idMedicaoFluxo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacao", type="text", length=0, nullable=true)
     */
    private $observacao;

    /**
     * @var string|null
     *
     * @ORM\Column(name="observacao_sistema", type="text", length=0, nullable=true)
     */
    private $observacaoSistema;

    /**
     * @var string
     *
     * @ORM\Column(name="passo", type="string", length=0, nullable=false, options={"default"="1"})
     */
    private $passo = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="P","comment"="P - Pendente, A - Aprovado, R - Reprovado"})
     */
    private $status = 'P';

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
     * @var int
     *
     * @ORM\Column(name="id_usuario", type="integer", nullable=false)
     */
    private $idUsuario;


}
