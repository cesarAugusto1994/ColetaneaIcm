<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Log
 *
 * @ORM\Table(name="log", indexes={@ORM\Index(name="FK_8F3F68C5DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Log
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
     * @ORM\Column(name="cadastro", type="datetime", nullable=false)
     */
    private $cadastro;

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

