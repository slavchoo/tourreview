<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class StoryClass
{
    protected $id;
    protected $user_id;
    protected $summery;
    protected $title;
    protected $creation_date;
    protected $description;
    protected $image;
}