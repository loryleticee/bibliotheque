<?php

namespace App\Controller;


use App\Entity\Book;
use App\Helpers\EntityManagerHelper as Em;
use App\Models\AbstractRepository;
use Doctrine\ORM\Mapping\ClassMetadata;
use Exception;

class BookController
{

  public function add()
  {
    if (!empty($_POST)) {
      if (isset($_POST['title'], $_POST['resume'], $_POST['author'], $_POST['publisher'], $_POST['isbn'])) {
        
        $title = $_POST['title'];
        $resume = $_POST['resume'];
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $isbn = $_POST['isbn'];
      } else
      throw new Exception("Formulaire incomplet");
      
      $entityManager = Em::getEntityManager();
      $book = new Book($title, $resume, $author, $publisher, $isbn);
      $entityManager->persist($book);
      
      try {
        $entityManager->flush();
        echo "Bonjour , votre livre est ajouté avec succès ";
      } catch (\Exception $th) {
        print $th->getMessage();
      }
    }
    include "./src/Views/AddBook.php";
  }
  public function show()
  {

    $entityManager = Em::getEntityManager();
    $class = new ClassMetadata("App\Entity\Book");
    $bookrepo = new AbstractRepository($entityManager, $class);
    $book = $bookrepo->findall();

    include "./src/Views/ShowBook.php";
  }

  public function delete() {

    
  }
}
