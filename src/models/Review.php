<?php

class Review
{
    private $rating;
    private $created_at;
    private $description;
    private $authorphoto;
    private $authorname;
    private $authorsurname;
    private $authorid;

    public function __construct($rating, $created_at, $description, $authorphoto, $authorname, $authorsurname, $authorid)
    {
        $this->rating = $rating;
        $this->created_at = $created_at;
        $this->description = $description;
        $this->authorphoto = $authorphoto;
        $this->authorname = $authorname;
        $this->authorsurname = $authorsurname;
        $this->authorid = $authorid;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at): void
    {
        $this->created_at = $created_at;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getAuthorphoto()
    {
        return $this->authorphoto;
    }

    public function setAuthorphoto($authorphoto): void
    {
        $this->authorphoto = $authorphoto;
    }

    public function getAuthorName()
    {
        return $this->authorname;
    }

    public function setAuthorName($authorname): void
    {
        $this->authorname = $authorname;
    }

    public function getAuthorSurname()
    {
        return $this->authorsurname;
    }

    public function setAuthorSurname($authorsurname): void
    {
        $this->authorsurname = $authorsurname;
    }

    public function getAuthorId()
    {
        return $this->authorid;
    }

    public function setAuthorid($authorid): void
    {
        $this->authorid = $authorid;
    }



}