<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailsEnviados
 *
 * @ORM\Table(name="emails_enviados", indexes={@ORM\Index(name="IDX_FC7E208FDB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class EmailsEnviados
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
     * @var \DateTime
     *
     * @ORM\Column(name="data_hora", type="datetime", nullable=false)
     */
    private $dataHora;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255, nullable=false)
     */
    private $tipo;

    /**
     * @var string
     *
     * @ORM\Column(name="mensagem", type="text", nullable=true)
     */
    private $mensagem;

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

