<?php

namespace RL\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Languages
 *
 * @ORM\Table(name="languages")
 * @ORM\Entity
 */
class Languages
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
     * @ORM\Column(name="name_en", type="string", length=30, nullable=false)
     */
    protected $nameEn;

    /**
     * @var string
     *
     * @ORM\Column(name="name_native", type="string", length=30, nullable=false)
     */
    protected $nameNative;

    /**
     * @var string
     *
     * @ORM\Column(name="designation", type="string", length=8, nullable=false)
     */
    protected $designation;


}
