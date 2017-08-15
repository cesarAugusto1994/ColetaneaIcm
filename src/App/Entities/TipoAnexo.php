<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAnexo
 *
 * @ORM\Table(name="tipo_anexo")
 * @ORM\Entity
 */
class TipoAnexo
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
     * @var string
     *
     * @ORM\Column(name="imagem", type="string", length=255, nullable=true)
     */
    private $imagem;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ativo", type="boolean", nullable=false)
     */
    private $ativo;

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=20, nullable=false)
     */
    private $icone;


}

