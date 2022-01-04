<?php
require_once '../inc/functions.php';  // appel du fichier de fonctions


?>
<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CoursPHP - Chapitre - Exo 04 form</title>
    <!-- mes styles -->
    <!-- <link rel="stylesheet" href="../css/style.css"> -->

</head>

<body>
    <header class="container-fluid f-header p-2">
        <h1 class="text-center bg-warning">CoursPHP - Chapitre - form</h1>
    </header>
    <!-- fin container-fluid  -->

    <div class="container bg-light">
        <form action="" method="POST">
            <div class="form-row">
                <div class="row">
                    <div class="col">
                        <input type="text" name="prenom" class="form-control" placeholder="Prénom" aria-label="prenom">
                    </div>

                    <div class="col">

                        <input type="text" name="nom" class="form-control" placeholder="Nom" aria-label="Nom" required>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPassword4">Password</label>
                            <input type="password" class="form-control" name="Password" id="inputPassword4" placeholder="Password">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="inputAddress">Address</label>
                            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputAddress2">code-postal</label>
                            <input type="number" class="form-control" id="inputAddress2" name="code-postal" placeholder="Apartment, studio, or floor">
                        </div>
                    </div>


                </div>
                <div class="row mt-2">
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>

            </div>
        </form>
        <?php print_r($_POST); ?>
    <?php echo "<br>"; ?>
      <?php if (isset($_POST['name'])): ?>
        <?php echo $_POST['name'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_POST['prenom'])): ?>
        <?php echo $_POST['prenom'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_POST['email'])): ?>
        <?php echo $_POST['email'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_POST['Password'])): ?>
        <?php echo $_POST['Password'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_POST['address'])): ?>
        <?php echo $_POST['address'] . "<br>"; ?>
      <?php endif; ?>
      <?php if (isset($_POST['Address'])): ?>
        <?php echo $_POST['Address'] . "<br>"; ?>
      <?php endif; ?>
       <?php if (isset($_POST['code-postal'])): ?>
        <?php echo $_POST['code-postal'] . "<br>"; ?>
      <?php endif; ?>
      

    </div>
    


    <!-- fin container  -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>