<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificacao
 *
 * @ORM\Table(name="notificacao", indexes={@ORM\Index(name="IDX_5ACD9386DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Notificacao
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
     * @ORM\Column(name="mensagem", type="text", nullable=false)
     */
    private $mensagem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visualizada", type="boolean", nullable=false)
     */
    private $visualizada = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_hora", type="datetime", nullable=false)
     */
    private $dataHora;

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

