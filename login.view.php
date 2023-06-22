<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous" defer></script>
</head>
<body style="background-color: #fff3cc;">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 text-center">
            <h1>UNIVERSITY</h1>
            <p>A TRADITION OF EXCELLENCE</p>
        
    </div>
    <div class="row ">
        <div class="col"></div>
<div class="col text-center bg-white ">
    <p>bienvenido ingresa con tu cuenta</p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" name="login">
  <div class="mb-3">
    <input type="email" name="email"; class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>
  <div class="mb-3">
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="text-end">
  <button type="submit" name="btningresar" class="btn btn-primary" onclick="login.submit()">Ingresar</button>
  </div>
  <?php  if (!empty($errores)) {
                    echo $errores;
                    } 
                ?>
</form>
</div>
<div class="col"></div>
    </div>
</body>