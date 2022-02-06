<?php

class Route
{
    private $title;
    private $city;
    private $roadtype;
    private $image;
    private $rating;
    private $id;

    public function __construct($title, $city, $roadtype, $image, $rating, $id)
    {
        $this->title = $title;
        $this->city = $city;
        $this->roadtype = $roadtype;
        $this->image = $image;
        if($rating === NULL) {
            $rating = '0';
        }
        $this->rating = $rating;
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function getRoadtype()
    {
        return $this->roadtype;
    }

    public function setRoadtype($roadtype): void
    {
        $this->roadtype = $roadtype;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

}