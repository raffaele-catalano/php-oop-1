<?php

include_once __DIR__ . '/Category-Bonus.php';

class Movie {

    public $title;
    public $category;
    public $duration;
    public $releaseYear;
    public $averageVote;
    public $otherCategory;
    
    public function __construct($_title, $_category, $_duration, $_releaseYear, $_averageVote, CategoryBonus $_otherCategory = null )
    {
        $this->title            = $_title;
        $this->category         = $_category;
        $this->duration           = $this->convertTime($_duration);
        $this->releaseYear      = $_releaseYear;
        $this->averageVote      = $_averageVote;
        $this->otherCategory    = $_otherCategory;

    }

    // public function getFullInfo() {
    //     return 'Title:' . ' ' . $this->title . ' - ' . 'Category:' . ' ' . $this->category . ' - ' . 'Length:' . ' ' . $this->length . ' - ' . 'Release Year:' . ' ' . $this->releaseYear . ' - ' . 'Average Vote:' . ' ' . $this->averageVote;
    // }

    public function convertTime($duration) {

        $zero    = new DateTime('@0');
        $offset  = new DateTime('@' . $duration * 60);
        $diff    = $zero->diff($offset);
        return $diff->format('%hh %Im');
    }

}

