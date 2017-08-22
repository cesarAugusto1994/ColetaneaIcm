<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Login
 *
 * @ORM\Table(name="login", indexes={@ORM\Index(name="IDX_AA08CB10DB38439E", columns={"usuario_id"}), @ORM\Index(name="login_sessao_index", columns={"sessao"})})
 * @ORM\Entity(repositoryClass="App\Repository\LoginRepository")
 */
class Login
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
     * @ORM\Column(name="data_login", type="datetime", nullable=false)
     */
    private $dataLogin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data_logout", type="datetime", nullable=true)
     */
    private $dataLogout;

    /**
     * @var string
     *
     * @ORM\Column(name="sessao", type="string", length=50, nullable=true)
     */
    private $sessao;

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
    public function getDataLogin()
    {
        return $this->dataLogin;
    }

    /**
     * @param \DateTime $dataLogin
     */
    public function setDataLogin($dataLogin)
    {
        $this->dataLogin = $dataLogin;
    }

    /**
     * @return \DateTime
     */
    public function getDataLogout()
    {
        return $this->dataLogout;
    }

    /**
     * @param \DateTime $dataLogout
     */
    public function setDataLogout($dataLogout)
    {
        $this->dataLogout = $dataLogout;
    }

    /**
     * @return string
     */
    public function getSessao()
    {
        return $this->sessao;
    }

    /**
     * @param string $sessao
     */
    public function setSessao($sessao)
    {
        $this->sessao = $sessao;
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

