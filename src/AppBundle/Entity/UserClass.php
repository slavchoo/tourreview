<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="storyClass")
 */

class UserClass
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $userName;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string")
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string")
     */
    protected $personalData;

    /**
     * @ORM\Column(type="text")
     */
    protected $phone;

    /**
     * @ORM\Column(type="string")
     */
    protected $location;

    /**
     * @ORM\Column(type="string")
     */
    protected $photo;
    protected $registrationDate;

    /**
     * @ORM\Column(type="datetime")
     */
}