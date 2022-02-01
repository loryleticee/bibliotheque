<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modification de l'article</title>
</head>
<body>
    
<form method="post">
    <input type="text" name="title" value="<?= $livre->getTitle() ?>">
    <input type="text" name="author" value="<?= $livre->getAuthor() ?>">
    <input type="text" name="resume" value="<?= $livre->getResume() ?>">
    <input type="text" name="publisher" value="<?= $livre->getPublisher() ?>">
    <input type="text" name="number" value="<?= $livre->getNumber() ?>">

   


</body>
</html>