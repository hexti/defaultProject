<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbBanco
 *
 * @ORM\Table(name="tb_banco")
 * @ORM\Entity
 */
class TbBanco
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
     * @var string|null
     *
     * @ORM\Column(name="titular", type="string", length=255, nullable=true)
     */
    private $titular;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=80, nullable=false)
     */
    private $nome;

    /**
     * @var string|null
     *
     * @ORM\Column(name="endereco", type="string", length=255, nullable=true)
     */
    private $endereco;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_pais", type="integer", nullable=true)
     */
    private $idPais;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_estado", type="integer", nullable=true)
     */
    private $idEstado;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_cidade", type="integer", nullable=true)
     */
    private $idCidade;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_postal", type="string", length=20, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="codigo_swift", type="string", length=20, nullable=true)
     */
    private $codigoSwift;

    /**
     * @var string|null
     *
     * @ORM\Column(name="agencia", type="string", length=40, nullable=true)
     */
    private $agencia;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conta", type="string", length=20, nullable=true)
     */
    private $conta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="conta_banco_intermediario", type="string", length=20, nullable=true)
     */
    private $contaBancoIntermediario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instrucao_especiais", type="string", length=255, nullable=true)
     */
    private $instrucaoEspeciais;

    /**
     * @var string|null
     *
     * @ORM\Column(name="aba_numero", type="string", length=20, nullable=true)
     */
    private $abaNumero;

    /**
     * @var string
     *
     * @ORM\Column(name="conta_sistema_reserva_federal", type="string", length=0, nullable=false, options={"default"="N"})
     */
    private $contaSistemaReservaFederal = 'N';

    /**
     * @var int
     *
     * @ORM\Column(name="id_fonte", type="integer", nullable=false)
     */
    private $idFonte;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_moeda", type="integer", nullable=true)
     */
    private $idMoeda;

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
