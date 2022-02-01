<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Tous les livres</title>
</head>
<body>
<div class="d-flex justify-content-center">
<?php foreach ($articles as $key => $article) {
    $title =  $article->getTitle();
     $author = $article->getAuthor();
     $resume = $article->getResume();
     $publisher = $article->getPublisher();
     $number = $article->getIsbn();
     echo "<p>" . $title . ' ' . "<span style='font-weight:bold;'>" . $author . "</span>" . ' ' . 
       $resume . ' ' .   $isbn . ' ' .
     $publisher . ' ' .  "</p> ";

     
  }   
?>
    </div>
  </div>
</div>
</form>
</body>
</html>