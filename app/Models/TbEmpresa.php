<?php

namespace SysPlenus\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * TbEmpresa
 *
 * @ORM\Table(name="tb_empresa")
 * @ORM\Entity
 */
class TbEmpresa
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
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=100, nullable=false)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nome_fantasia", type="string", length=60, nullable=false)
     */
    private $nomeFantasia;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=20, nullable=false)
     */
    private $cnpj;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inscricao_estadual", type="string", length=20, nullable=true)
     */
    private $inscricaoEstadual;

    /**
     * @var string|null
     *
     * @ORM\Column(name="inscricao_municipal", type="string", length=20, nullable=true)
     */
    private $inscricaoMunicipal;

    /**
     * @var string
     *
     * @ORM\Column(name="logradouro", type="string", length=255, nullable=false)
     */
    private $logradouro;

    /**
     * @var int
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="complemento", type="string", length=80, nullable=false)
     */
    private $complemento;

    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=80, nullable=false)
     */
    private $bairro;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=10, nullable=false)
     */
    private $cep;

    /**
     * @var int
     *
     * @ORM\Column(name="id_pais", type="integer", nullable=false)
     */
    private $idPais;

    /**
     * @var int
     *
     * @ORM\Column(name="id_estado", type="integer", nullable=false)
     */
    private $idEstado;

    /**
     * @var int
     *
     * @ORM\Column(name="id_cidade", type="integer", nullable=false)
     */
    private $idCidade;

    /**
     * @var string
     *
     * @ORM\Column(name="ponto_referencia", type="text", length=0, nullable=false)
     */
    private $pontoReferencia;

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
