<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Musica
 *
 * @ORM\Table(name="musica", indexes={@ORM\Index(name="IDX_7E7344EF1137ABCF", columns={"album_id"}), @ORM\Index(name="IDX_7E7344EF3397707A", columns={"categoria_id"}), @ORM\Index(name="IDX_7E7344EFDB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Musica
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
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=true)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=255, nullable=false)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="tom", type="string", length=255, nullable=false)
     */
    private $tom;

    /**
     * @var string
     *
     * @ORM\Column(name="letra", type="text", nullable=true)
     */
    private $letra;

    /**
     * @var string
     *
     * @ORM\Column(name="letra_original", type="text", nullable=true)
     */
    private $letraOriginal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro", type="datetime", nullable=false)
     */
    private $cadastro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="novo", type="boolean", nullable=false)
     */
    private $novo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean", nullable=false)
     */
    private $ativo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="apenas_anexos", type="boolean", nullable=true)
     */
    private $apenasAnexos;

    /**
     * @var Album
     *
     * @ORM\ManyToOne(targetEntity="Album")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="album_id", referencedColumnName="id")
     * })
     */
    private $album;

    /**
     * @var Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * })
     */
    private $categoria;

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
     * @return int
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param int $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getTom()
    {
        return $this->tom;
    }

    /**
     * @param string $tom
     */
    public function setTom($tom)
    {
        $this->tom = $tom;
    }

    /**
     * @return string
     */
    public function getLetra()
    {
        return $this->letra;
    }

    /**
     * @param string $letra
     */
    public function setLetra($letra)
    {
        $this->letra = $letra;
    }

    /**
     * @return string
     */
    public function getLetraOriginal()
    {
        return $this->letraOriginal;
    }

    /**
     * @param string $letraOriginal
     */
    public function setLetraOriginal($letraOriginal)
    {
        $this->letraOriginal = $letraOriginal;
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
     * @return bool
     */
    public function isNovo()
    {
        return $this->novo;
    }

    /**
     * @param bool $novo
     */
    public function setNovo($novo)
    {
        $this->novo = $novo;
    }

    /**
     * @return bool
     */
    public function isAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param bool $ativo
     */
    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
    }

    /**
     * @return bool
     */
    public function isApenasAnexos()
    {
        return $this->apenasAnexos;
    }

    /**
     * @param bool $apenasAnexos
     */
    public function setApenasAnexos($apenasAnexos)
    {
        $this->apenasAnexos = $apenasAnexos;
    }

    /**
     * @return Album
     */
    public function getAlbum()
    {
        return $this->album;
    }

    /**
     * @param Album $album
     */
    public function setAlbum($album)
    {
        $this->album = $album;
    }

    /**
     * @return Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param Categoria $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
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

