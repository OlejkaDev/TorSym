<?php

namespace App\TorrentBundle\Entity;

class Torrent {

  private $id;

  protected $status;

  private $category;

  private $author;

  private $tags;

  public function __construct()
    {
    }

  public function getId()
    {
        return $this->id;
    }

  public function setId($id)
    {
        $this->id = $id;
    }

  public function getCategory()
    {
       return $this->category;
    }

   public function setCategory(BlogCategory $category)
    {
       $this->category = $category;
    }

  public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

  public function addTag($tag)
    {
        $this->tags[] = $tag;
        return $this;
    }

  public function setStatus($status)
    {
    }

  public function getAuthor()
    {
        return $this->author;
    }

  public function setAuthor($author)
    {
        $this->author = $author;
        return $this;
    }



}
