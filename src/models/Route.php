<?php

class Route
{
    private $title;
    private $city;
    private $roadtype;
    private $image;

    public function __construct($title, $city, $roadtype, $image)
    {
        $this->title = $title;
        $this->city = $city;
        $this->roadtype = $roadtype;
        $this->image = $image;
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

}