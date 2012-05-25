<?php

namespace Accreditamenti\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Accreditamenti\UserBundle\Entity\User
 * @ORM\Table(name="ideacpa_user")
 * @ORM\Entity(repositoryClass="Accreditamenti\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct() {
        parent::__construct();
        // your own logic
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}