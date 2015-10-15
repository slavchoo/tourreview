<?php

namespace AppBundle\Entity;

class UserClass
{
    /**
     * @ORM\Column(type="string")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $username;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $password;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $email;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="text")
     */
    protected $personal_data;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $location;

    /**
     * @ORM\Column(type="object")
     */
    protected $photo;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $registration_date;
}