<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoUsuarios
 *
 * @ORM\Table(name="grupo_usuarios", indexes={@ORM\Index(name="IDX_461BB8379C833003", columns={"grupo_id"}), @ORM\Index(name="IDX_461BB837DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class GrupoUsuarios
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
     * @var boolean
     *
     * @ORM\Column(name="administrador", type="boolean", nullable=false)
     */
    private $administrador = '0';

    /**
     * @var \Entities\Grupo
     *
     * @ORM\ManyToOne(targetEntity="Entities\Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

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

