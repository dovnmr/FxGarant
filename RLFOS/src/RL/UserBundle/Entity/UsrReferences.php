<?php

namespace RL\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UsrReferences
 *
 * @ORM\Table(name="usr_references")
 * @ORM\Entity
 */
class UsrReferences
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
     * @ORM\Column(name="title", type="string", length=16, nullable=true)
     */
    protected $title;

    /**
     * @var \Languages
     *
     * @ORM\ManyToOne(targetEntity="Languages")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="id")
     * })
     */
    protected $languageId;


}
