<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoMusicas
 *
 * @ORM\Table(name="grupo_musicas", indexes={@ORM\Index(name="IDX_74CCCD019C833003", columns={"grupo_id"}), @ORM\Index(name="IDX_74CCCD0199E6F854", columns={"musica_id"}), @ORM\Index(name="FK_74CCCD0195FC38A6", columns={"situacao_id"})})
 * @ORM\Entity
 */
class GrupoMusicas
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
     * @var \Entities\GrupoMusicaSituacao
     *
     * @ORM\ManyToOne(targetEntity="Entities\GrupoMusicaSituacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacao_id", referencedColumnName="id")
     * })
     */
    private $situacao;

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
     * @var \Entities\Grupo
     *
     * @ORM\ManyToOne(targetEntity="Entities\Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;


}

