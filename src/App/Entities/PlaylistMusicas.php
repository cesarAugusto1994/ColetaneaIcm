<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlaylistMusicas
 *
 * @ORM\Table(name="playlist_musicas", indexes={@ORM\Index(name="IDX_94FA54BC6BBD148", columns={"playlist_id"}), @ORM\Index(name="IDX_94FA54BC99E6F854", columns={"musica_id"}), @ORM\Index(name="IDX_94FA54BCDB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class PlaylistMusicas
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
     * @var \Entities\Playlist
     *
     * @ORM\ManyToOne(targetEntity="Entities\Playlist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="playlist_id", referencedColumnName="id")
     * })
     */
    private $playlist;

    /**
     * @var \Entities\MusicaAnexos
     *
     * @ORM\ManyToOne(targetEntity="Entities\MusicaAnexos")
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

