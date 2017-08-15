<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posts
 *
 * @ORM\Table(name="posts", indexes={@ORM\Index(name="FK_885DBAFADB38439E", columns={"usuario_id"})})
 * @ORM\Entity
 */
class Posts
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
     * @ORM\Column(name="titulo", type="string", length=255, nullable=false)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="text", nullable=false)
     */
    private $descricao;

    /**
     * @var string
     *
     * @ORM\Column(name="conteudo", type="text", nullable=false)
     */
    private $conteudo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cadastro", type="datetime", nullable=false)
     */
    private $cadastro;

    /**
     * @var string
     *
     * @ORM\Column(name="year", type="string", length=255, nullable=false)
     */
    private $year;

    /**
     * @var string
     *
     * @ORM\Column(name="month", type="string", length=255, nullable=false)
     */
    private $month;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="atualizado", type="datetime", nullable=true)
     */
    private $atualizado;

    /**
     * @var integer
     *
     * @ORM\Column(name="ativo", type="smallint", nullable=false)
     */
    private $ativo = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="background", type="text", nullable=true)
     */
    private $background;

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

