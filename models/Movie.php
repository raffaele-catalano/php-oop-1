<?php

include_once __DIR__ . '/Category-Bonus.php';

class Movie {

    public $title;
    public $category;
    public $length;
    public $releaseYear;
    public $averageVote;
    public $otherCategory;
    
    public function __construct($_title, $_category, $_length, $_releaseYear, $_averageVote, CategoryBonus $_otherCategory = null )
    {
        $this->title            = $_title;
        $this->category         = $_category;
        $this->length           = $this->convertTime($_length);
        $this->releaseYear      = $_releaseYear;
        $this->averageVote      = $_averageVote;
        $this->otherCategory      = $_otherCategory;

    }

    // public function getFullInfo() {
    //     return 'Title:' . ' ' . $this->title . ' - ' . 'Category:' . ' ' . $this->category . ' - ' . 'Length:' . ' ' . $this->length . ' - ' . 'Release Year:' . ' ' . $this->releaseYear . ' - ' . 'Average Vote:' . ' ' . $this->averageVote;
    // }

    public function convertTime($length) {

        $zero    = new DateTime('@0');
        $offset  = new DateTime('@' . $length * 60);
        $diff    = $zero->diff($offset);
        return $diff->format('%h.%I');
    }

}

