<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * GrupoMusicaSituacao
 *
 * @ORM\Table(name="grupo_musica_situacao")
 * @ORM\Entity
 */
class GrupoMusicaSituacao
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
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;


}

