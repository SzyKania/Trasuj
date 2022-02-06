<?php

class Review
{
    private $rating;
    private $created_at;
    private $description;
    private $authorphoto;
    private $authorname;
    private $authorsurname;

    public function __construct($rating, $created_at, $description, $authorphoto, $authorname, $authorsurname)
    {
        $this->rating = $rating;
        $this->created_at = $created_at;
        $this->description = $description;
        $this->authorphoto = $authorphoto;
        $this->authorname = $authorname;
        $this->authorsurname = $authorsurname;
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

    public function getAuthorname()
    {
        return $this->authorname;
    }

    public function setAuthorname($authorname): void
    {
        $this->authorname = $authorname;
    }

    public function getAuthorsurname()
    {
        return $this->authorsurname;
    }

    public function setAuthorsurname($authorsurname): void
    {
        $this->authorsurname = $authorsurname;
    }



}