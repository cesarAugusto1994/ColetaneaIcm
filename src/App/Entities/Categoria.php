<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria", indexes={@ORM\Index(name="IDX_4E10122DD43D97B8", columns={"colecao_id"})})
 * @ORM\Entity
 */
class Categoria
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
     * @ORM\Column(name="ativo", type="smallint", nullable=false)
     */
    private $ativo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="apenas_anexos", type="boolean", nullable=false)
     */
    private $apenasAnexos;

    /**
     * @var Colecao
     *
     * @ORM\ManyToOne(targetEntity="Colecao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="colecao_id", referencedColumnName="id")
     * })
     */
    private $colecao;

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
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getNomeFormatado()
    {
        return (str_replace(" ", "-", trim(strtolower($this->nome))));
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return int
     */
    public function getAtivo()
    {
        return $this->ativo;
    }

    /**
     * @param int $ativo
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
     * @return Colecao
     */
    public function getColecao()
    {
        return $this->colecao;
    }

    /**
     * @param Colecao $colecao
     */
    public function setColecao($colecao)
    {
        $this->colecao = $colecao;
    }


}

