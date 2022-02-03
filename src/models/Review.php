<?php

class Review
{
    private $rating;
    private $created_at;
    private $description;

    public function __construct($rating, $created_at, $description)
    {
        $this->rating = $rating;
        $this->created_at = $created_at;
        $this->description = $description;
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



}