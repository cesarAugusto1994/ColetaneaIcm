<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sugestao
 *
 * @ORM\Table(name="sugestao", indexes={@ORM\Index(name="IDX_36179898DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Sugestao
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
     * @var boolean
     *
     * @ORM\Column(name="respondida", type="boolean", nullable=false)
     */
    private $respondida;

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

