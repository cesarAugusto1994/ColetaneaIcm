<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmailConfirmacao
 *
 * @ORM\Table(name="email_confirmacao", indexes={@ORM\Index(name="IDX_473E44A5DB38439E", columns={"usuario_id"}), @ORM\Index(name="IDX_473E44A56BF700BD", columns={"status_id"})})
 * @ORM\Entity
 */
class EmailConfirmacao
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
     * @ORM\Column(name="token", type="string", length=50, nullable=false)
     */
    private $token;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gerado_em", type="datetime", nullable=false)
     */
    private $geradoEm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ativo_em", type="datetime", nullable=true)
     */
    private $ativoEm;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validade", type="datetime", nullable=false)
     */
    private $validade;

    /**
     * @var \Entities\StatusEmail
     *
     * @ORM\ManyToOne(targetEntity="Entities\StatusEmail")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="status_id", referencedColumnName="id")
     * })
     */
    private $status;

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

