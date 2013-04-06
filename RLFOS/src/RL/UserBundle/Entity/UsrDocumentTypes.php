<?php

namespace RL\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsrDocumentTypes
 *
 * @ORM\Table(name="usr_document_types")
 * @ORM\Entity
 */
class UsrDocumentTypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=false)
     */
    protected $name;


}
