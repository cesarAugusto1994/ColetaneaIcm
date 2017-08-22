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
     * @var Playlist
     *
     * @ORM\ManyToOne(targetEntity="Playlist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="playlist_id", referencedColumnName="id")
     * })
     */
    private $playlist;

    /**
     * @var MusicaAnexos
     *
     * @ORM\ManyToOne(targetEntity="MusicaAnexos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="musica_id", referencedColumnName="id")
     * })
     */
    private $musica;

    /**
     * @var Usuarios
     *
     * @ORM\ManyToOne(targetEntity="Usuarios")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario_id", referencedColumnName="id")
     * })
     */
    private $usuario;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return \DateTime
     */
    public function getCadastro()
    {
        return $this->cadastro;
    }

    /**
     * @param \DateTime $cadastro
     */
    public function setCadastro($cadastro)
    {
        $this->cadastro = $cadastro;
    }

    /**
     * @return Playlist
     */
    public function getPlaylist()
    {
        return $this->playlist;
    }

    /**
     * @param Playlist $playlist
     */
    public function setPlaylist($playlist)
    {
        $this->playlist = $playlist;
    }

    /**
     * @return MusicaAnexos
     */
    public function getMusica()
    {
        return $this->musica;
    }

    /**
     * @param MusicaAnexos $musica
     */
    public function setMusica($musica)
    {
        $this->musica = $musica;
    }

    /**
     * @return Usuarios
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuarios $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }


}

