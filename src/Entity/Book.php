<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
/**  
 * @ORM\Entity  
 * @ORM\Table(name="Book")  
 */
class Book
{

   /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private int $id;
   /**  
     * @ORM\Column(type="string")
     */
    private string $title;

    /**  
     * @ORM\Column(type="string")
     */
    private string $resume;

    /**  
     * @ORM\Column(type="string")
     */
    private string $author;

    /**  
     * @ORM\Column(type="string")
     */
    private string $publisher;

    /**  
     * @ORM\Column(type="integer")
     */
    private int $isbn;

     public function __construct (string $title, string $resume, int $author, string $publisher , string $isbn) {
         
        $this->title = $title;
        $this->resume = $resume;
        $this->author = $author;
        $this->publisher = $publisher;
        $this->number = $isbn;


     }

    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the value of title
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param string $title
     *
     * @return self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of resume
     *
     * @return string
     */
    public function getResume(): string
    {
        return $this->resume;
    }

    /**
     * Set the value of resume
     *
     * @param string $resume
     *
     * @return self
     */
    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get the value of author
     *
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @param string $author
     *
     * @return self
     */
    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of publisher
     *
     * @return string
     */
    public function getPublisher(): string
    {
        return $this->publisher;
    }

    /**
     * Set the value of publisher
     *
     * @param string $publisher
     *
     * @return self
     */
    public function setPublisher(string $publisher): self
    {
        $this->publisher = $publisher;

        return $this;
    }

    

    /**
     * Get the value of isbn
     *
     * @return int
     */
    public function getIsbn(): int
    {
        return $this->isbn;
    }

    /**
     * Set the value of isbn
     *
     * @param int $isbn
     *
     * @return self
     */
    public function setIsbn(int $isbn): self
    {
        $this->nIsbn = $isbn;

        return $this;
    }
}
