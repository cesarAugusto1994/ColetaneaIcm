<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * AnexoDownloads
 *
 * @ORM\Table(name="anexo_downloads", indexes={@ORM\Index(name="IDX_7C83D622DB38439E", columns={"usuario_id"}), @ORM\Index(name="IDX_7C83D622C9348664", columns={"anexo_id"})})
 * @ORM\Entity
 */
class AnexoDownloads
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
     * @var \Entities\MusicaAnexos
     *
     * @ORM\ManyToOne(targetEntity="Entities\MusicaAnexos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="anexo_id", referencedColumnName="id")
     * })
     */
    private $anexo;

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

