<?php

namespace RL\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	public function __construct()
	{
		parent::__construct();
		
	}

//	/**
//     * Get id
//     *
//     * @return integer 
//     */
//    public function getId()
//    {
//        return $this->id;
//    }
}
