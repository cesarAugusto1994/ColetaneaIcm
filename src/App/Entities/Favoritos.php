<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Favoritos
 *
 * @ORM\Table(name="favoritos", indexes={@ORM\Index(name="IDX_1E86887F99E6F854", columns={"musica_id"}), @ORM\Index(name="IDX_1E86887FDB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Favoritos
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
     * @ORM\Column(name="cadastro", type="datetime", nullable=false)
     */
    private $cadastro;

    /**
     * @var \Entities\Musica
     *
     * @ORM\ManyToOne(targetEntity="Entities\Musica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="musica_id", referencedColumnName="id")
     * })
     */
    private $musica;

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

