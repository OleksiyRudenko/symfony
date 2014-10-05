<?php

namespace BW\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 */
class Post
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $heading;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $published;

    /**
     * @var \DateTime
     */
    private $createdon;

    /**
     * @var \DateTime
     */
    private $updatedon;

    /**
     * @var string
     */
    private $author = '(Default)';


    public function __construct()
    {
        $this->updatedon=new \DateTime;
        $this->createdon=new \DateTime;
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

    /**
     * Set heading
     *
     * @param string $heading
     * @return Post
     */
    public function setHeading($heading)
    {
        $this->heading = $heading;

        return $this;
    }

    /**
     * Get heading
     *
     * @return string 
     */
    public function getHeading()
    {
        return $this->heading;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Post
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Post
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set createdon
     *
     * @param \DateTime $createdon
     * @return Post
     */
    public function setCreatedon($createdon)
    {
        $this->createdon = $createdon;

        return $this;
    }

    /**
     * Get createdon
     *
     * @return \DateTime 
     */
    public function getCreatedon()
    {
        return $this->createdon;
    }

    /**
     * Set updatedon
     *
     * @param \DateTime $updatedon
     * @return Post
     */
    public function setUpdatedon($updatedon)
    {
        $this->updatedon = $updatedon;

        return $this;
    }

    /**
     * Get updatedon
     *
     * @return \DateTime 
     */
    public function getUpdatedon()
    {
        return $this->updatedon;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Post
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }
}
