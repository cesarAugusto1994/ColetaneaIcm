<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * MusicaAnexos
 *
 * @ORM\Table(name="musica_anexos", indexes={@ORM\Index(name="IDX_849BE9F099E6F854", columns={"musica_id"}), @ORM\Index(name="IDX_849BE9F0A9276E6C", columns={"tipo_id"}), @ORM\Index(name="IDX_849BE9F0DB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class MusicaAnexos
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
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var integer
     *
     * @ORM\Column(name="link_externo", type="smallint", nullable=false)
     */
    private $linkExterno;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", nullable=true)
     */
    private $link;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro", type="datetime", nullable=false)
     */
    private $cadastro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean", nullable=false)
     */
    private $ativo;

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
     * @var \Entities\TipoAnexo
     *
     * @ORM\ManyToOne(targetEntity="Entities\TipoAnexo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tipo_id", referencedColumnName="id")
     * })
     */
    private $tipo;

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

