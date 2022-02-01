<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <title>Ajouter votre livre </title>
</head>

<body>
   <?php include "./src/Views/Header.php"  ?>
    <h1>Ajouter votre livre <h1>
  <div class="d-flex justify-content-center">
    <form method="post">
      <div class="row">
        <div class="col">
          <input type="text" name="title" class="form-control" placeholder="Titre" required>
        </div>
        <div class="col">
          <input type="text" name="resume" class="form-control" placeholder="Résumé" required>
          <div class="col">
            <input type="text" name="author" class="form-control" placeholder="Auteur" required>
            <div class="col">
              <input type="text" name="publisher" class="form-control" placeholder="éditeur" required>
              <div class="col">
                <input type="number" name="isbn" class="form-control" placeholder="Numéro ISBN" required>
              </div>
            </div>

            <input type="submit" class="btn btn-outline-danger"></input>
          </div>
        </div>
      </div>
    </form>
</body>

</html>