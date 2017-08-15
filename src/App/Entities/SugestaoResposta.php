<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * SugestaoResposta
 *
 * @ORM\Table(name="sugestao_resposta", indexes={@ORM\Index(name="IDX_B11B25F4AF0AA99B", columns={"sugestao_id"}), @ORM\Index(name="IDX_B11B25F4DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class SugestaoResposta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="string", length=255, nullable=false)
     */
    private $mensagem;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="enviada_em", type="datetime", nullable=true)
     */
    private $enviadaEm;

    /**
     * @var \Entities\Sugestao
     *
     * @ORM\ManyToOne(targetEntity="Entities\Sugestao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sugestao_id", referencedColumnName="id")
     * })
     */
    private $sugestao;

    /**
     * @var \Entities\Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Entities\Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;


}

