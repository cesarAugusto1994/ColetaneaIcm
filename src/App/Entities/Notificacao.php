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
     * @return string
     */
    public function getMensagem()
    {
        return $this->mensagem;
    }

    /**
     * @param string $mensagem
     */
    public function setMensagem($mensagem)
    {
        $this->mensagem = $mensagem;
    }

    /**
     * @return bool
     */
    public function isVisualizada()
    {
        return $this->visualizada;
    }

    /**
     * @param bool $visualizada
     */
    public function setVisualizada($visualizada)
    {
        $this->visualizada = $visualizada;
    }

    /**
     * @return \DateTime
     */
    public function getDataHora()
    {
        return $this->dataHora;
    }

    /**
     * @param \DateTime $dataHora
     */
    public function setDataHora($dataHora)
    {
        $this->dataHora = $dataHora;
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

