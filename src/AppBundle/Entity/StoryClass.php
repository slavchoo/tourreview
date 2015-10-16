<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class StoryClass
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
    protected $user_id;

    /**
     * @ORM\Column(type="text")
     */
    protected $summery;

    /**
     * @ORM\Column(type="text")
     */
    protected $title;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $creation_date;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\Column(type="object")
     */
    protected $image;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserId()
    {
        return $this->user_id;
    }

    public function setUserId($user_id)
    {
        $this->user_id = $user_id;
    }

    public function getSummery()
    {
        return $this->summery;
    }

    public function setSummery($summery)
    {
        $this->summery = $summery;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    private function getCreationDate()
    {
        return $this->creation_date;
    }

    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;
    }

    private function getDescription()
    {
        return $this->creation_date;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    private function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }
}