<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="storyClass")
 */

class StoryClass
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
    protected $userId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $title;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $creationDate;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $description;

    /**
     * @ORM\Column(type="text")
     */
    protected $image;

}