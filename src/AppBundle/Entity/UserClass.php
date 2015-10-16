<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserName()
    {
        return $this->username;
    }

    public function setUserName($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    private function getRegistrationDate()
    {
        return $this->registration_date;
    }

    public function setRegistrationDate($registration_date)
    {
        $this->registration_date = $registration_date;
    }

    private function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
    }

    private function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
    }

    public function getPersonalData()
    {
        return $this->personal_data;
    }

    public function setPersonalData($personal_data)
    {
        $this->personal_data = $personal_data;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    public function setPhoto($photo)
    {
        $this->photo = $photo;
    }
}