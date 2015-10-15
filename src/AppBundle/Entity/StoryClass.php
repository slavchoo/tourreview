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
}