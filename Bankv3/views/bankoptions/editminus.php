<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Transaction</title>

</head>

<body>
    <header>
        <img class="logo" src="../img/logo.png" alt="">
    </header>
    <main class="center">
        <div style="width: 600px;" class="left-block ">
            <div class="title">Account Transaction </div>
            <div class="inputs">
                <form action=<?= "/updateminus/" .  $id ?> method="post">
                    <label class="info" for=""> Default Currency: € </label>
                    <input class="input" type="text" placeholder="Enter Value" name='regbalance'>
                    <div>
                        <h2>Current Accounts Status</h2>
                        <h3>
                            <tr class="tablerow" >
                                <td width="100" class="name">Name :<?= $account['regname'] ?></br> </td>
                                <td width="100" class="surname">Surname: <?= $account['regsurname'] ?></br> </td>
                                <td width="100" class="accno">IBAN: <?= $account['id'] ?></br> </td>
                                <td width="100" class="idno">Personal ID: <?= $account['regid'] ?></br> </td>
                                <td width="100" class="balance">Balance: <?= $account['regbalance'] . ' €' ?></br> </td>
                            </tr>
                        </h3>
                    </div>
                    <button class="btn" type="submit"> Confirm Payment </button>

                </form>
            </div>

    </main>

</body>