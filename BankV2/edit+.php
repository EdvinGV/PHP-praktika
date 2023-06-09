<?php
session_start();
if (!isset($_SESSION['name'])) {
    header('Location: http://localhost/egprojektas/BankV2/index.php?');
    die;
}

// ateinam per get ir isgaunam duomenys per query
$accounts = file_get_contents(__DIR__ . '/accounts.json');
$accounts = json_decode($accounts, true);
$id = (int)$_GET['regaccno'];
//issitraukiam query id is ruandam butent ta nari duomenu bazej json
$account = array_filter($accounts, fn ($c) => $id == $c['regaccno']);
$account = array_shift($account);


//spaudziam button ir per posta padarom ka reikia


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $accounts = array_map(function ($c) use ($id) {

 //ar numeris
        if( !is_numeric($_POST['regbalance'])){
            $_SESSION['transaction']= '<span style="color: crimson; "> Not a Number , Sorry</span>';
            header('Location: http://localhost/egprojektas/BankV2/edit+.php?regaccno='.$id);
                    die; }
        //ar ne nulis
        if($_POST['regbalance']<=0){
            $_SESSION['transaction']= '<span style="color: crimson; "> 0 money isn not really money , Sorry</span>';
            header('Location: http://localhost/egprojektas/BankV2/edit+.php?regaccno='.$id);
                    die;
        }
    
        
      
        
        if ($c['regaccno'] == $id) {
            $_POST['regbalance'] = number_format($_POST['regbalance'], 2, '.', '');
            $c['regbalance'] +=  +$_POST['regbalance']; // Update the account balance with the new value from the form input
        }
        return $c;
    }, $accounts);

    $accounts = json_encode($accounts, JSON_PRETTY_PRINT);
    file_put_contents(__DIR__ . '/accounts.json', $accounts);
    header('Location: http://localhost/egprojektas/BankV2/edit+.php?regaccno='.$id);
    $_SESSION['transaction']= '<span style="color: #90EE90; "> Transaction Completed Sucesfully ! </span>';
    die;
}








if (isset($_SESSION['transaction'])) {
    $msg = $_SESSION['transaction'];
    unset($_SESSION['transaction']);
} else {
    $msg = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VELNIO KODAI</title>
    <link rel="stylesheet" href="./bank.css">
</head>

<body>
    <header>
        <img class="logo" src="../img/logo-no-frame.png" alt="">
    </header>
    <main class="center">
        <div style="width: 600px;" class="left-block ">
            <div class="title">Account Transaction </div>
            <div class="inputs">
                <form action="http://localhost/egprojektas/BankV2/edit+.php?regaccno=<?= $account['regaccno'] ?>" method="post">
                    <label class="info" for=""> Default Currency: € </label> <input class="input" type="text" placeholder="Enter Value" name='regbalance'>
                    <div>
                        <h3>Current Accounts Status</h3>
                        <h3>
                            <tr class="tablerow" align="center">
                                <td width="100" class="name"><?= $account['regname'] ?> </td>
                                <td width="100" class="surname"> <?= $account['regsurname'] ?> </td>
                                <td width="100" class="accno"> <?= 'LT ' . $account['regaccno'] ?> </td>
                                <td width="100" class="idno"><?= $account['regid'] ?> </td>
                                <td width="100" class="balance"><?= $account['regbalance'] . ' €' ?> </td>

                            </tr>
                        </h3>
                    </div>
                    <button class="btn" type="submit"> Confirm Balance Incoming Payment </button>
                    <h2> <?= $msg ?></h2>
                </form>
            </div>
            <?php require __DIR__ . '/quickmeniu.php' ?>
    </main>

</body>