<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource
 * @ORM\Entity
 */
class Tag
{
	/**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column
     */
    private $title;

    /**
     * @var Bookmark[]
     *
     * @ORM\ManyToMany(targetEntity="Bookmark", mappedBy="tags")
     */
    private $bookmarks;

    public function __construct() {
        $this->bookmarks = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getBookmarks()
    {
        return $this->bookmarks;
    }

    /**
     * @param mixed $bookmarks
     *
     * @return self
     */
    public function setBookmarks($bookmarks)
    {
        $this->bookmarks = $bookmarks;

        return $this;
    }
}