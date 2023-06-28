




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Account Deletion</title>
  <link rel="stylesheet" href="./bank.css">
</head>

<body>
  <header>
    <img class="logo" src="../img/logo-no-frame.png" alt="">
  </header >
  <div class="center">
  <div  class="  title inputs delete">
  <h1>Cheese Deletion</h1></br>
         <H2>Are you sure you want to delete the following account?</H2></div></div>
  <main class="deletelayout  ">

                    <div class="center">
                    
                        <h3>
                            <tr class="tablerow" >
                                <td width="100" class="name">Name: <?= $account['regname'] ?></br> </td>
                                <td width="100" class="surname">Surname: <?= $account['regsurname'] ?></br> </td>
                                <td width="100" class="accno"> IBAN: <?= $account['id'] ?></br> </td>
                                <td width="100" class="idno">Pesonal ID:<?= $account['regid'] ?></br> </td>
                                <td width="100" class="balance">Balance:<?= $account['regbalance'] . ' €' ?></br> </td>
                            </tr>
                        </h3>
                    </div>
        </form>
      </div>
      <div class="center  meniukas" >
      <form action=<?= "/destroy/" .  $id ?> method="post">
<button class="item option btn" type="submit"><div class="item option">Delete</div> </button>

</form>
<a   class="item option btn" href="/accounts"><div class="item option">Cancel</div> </a>
<a href="/"><div class="item option btn">Home</div> </a>

</div>
  </main>

</body>
    