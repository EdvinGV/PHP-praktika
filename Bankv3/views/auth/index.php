<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>

<body>
  <header>
  <img class="logo" src="./img/logo.png" alt="">  </header>
  <style></style>
  <main>
 

    <div class="center">
      <div class=" inputs left-block center1">
        <form action= '/login' method="post">



          <label class="info">Name </label> <input class="input" type="text" name="name">

          <label class="info">Password </label> <input class="input" type="password" name="psw">
          
          <?php if ($error) : ?>
      <h2 style="color: crimson;"><?= $error ?></h2>
    <?php endif ?>
          <?php if (  $logout) : ?>
      <h2 style="color: green;"><?= $logout ?></h2>
    <?php endif ?>

          <button class="btn" type="submit"> Login </button>
 



        </form>
        
      </div>
    </div>
  </main>

</body>