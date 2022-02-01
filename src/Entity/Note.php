<?php 

namespace App\Entity;
use Doctrine\ORM\Entity as ORM;


class note extends Book {

 private int $rating;

    public function __construct(string $title, string $author, string $publisher, int $isbn , string $resume , int $rating) {

    parent::__construct($title, $author, $publisher, $isbn , $resume);
    $this->rating = $rating;

    }

 /**
  * Get the value of rating
  *
  * @return int
  */
 public function getRating(): int
 {
  return $this->rating;
 }

 /**
  * Set the value of rating
  *
  * @param int $rating
  *
  * @return self
  */
 public function setRating(int $rating): self
 {
  $this->rating = $rating;

  return $this;
 }
}