<?php

namespace App\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * StatusEmail
 *
 * @ORM\Table(name="status_email")
 * @ORM\Entity
 */
class StatusEmail
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
     * @ORM\Column(name="nome", type="string", length=25, nullable=false)
     */
    private $nome;


}

