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
     * @var GrupoMusicaSituacao
     *
     * @ORM\ManyToOne(targetEntity="GrupoMusicaSituacao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="situacao_id", referencedColumnName="id")
     * })
     */
    private $situacao;

    /**
     * @var Musica
     *
     * @ORM\ManyToOne(targetEntity="Musica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="musica_id", referencedColumnName="id")
     * })
     */
    private $musica;

    /**
     * @var Grupo
     *
     * @ORM\ManyToOne(targetEntity="Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="grupo_id", referencedColumnName="id")
     * })
     */
    private $grupo;

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
     * @return GrupoMusicaSituacao
     */
    public function getSituacao()
    {
        return $this->situacao;
    }

    /**
     * @param GrupoMusicaSituacao $situacao
     */
    public function setSituacao($situacao)
    {
        $this->situacao = $situacao;
    }

    /**
     * @return Musica
     */
    public function getMusica()
    {
        return $this->musica;
    }

    /**
     * @param Musica $musica
     */
    public function setMusica($musica)
    {
        $this->musica = $musica;
    }

    /**
     * @return Grupo
     */
    public function getGrupo()
    {
        return $this->grupo;
    }

    /**
     * @param Grupo $grupo
     */
    public function setGrupo($grupo)
    {
        $this->grupo = $grupo;
    }


}

