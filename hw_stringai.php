
<?php
echo '_____________U1____________<br><br><br><br>';
$actor_name= 'Johnny';
$actor_surname= 'Depp';
$shorter = strlen($actor_name) < strlen($actor_surname) ? $actor_name : $actor_surname;

echo "Shorter string of Johnny Depp is $shorter <br> ";








echo '_____________U2____________<br><br><br><br>';
$actor_name= 'Johnny';
$actor_surname= 'Depp';
$x= strtoupper($actor_name);
$y= strtolower($actor_surname);
echo " funckija dydziosiomis  $x  ir mazosiomis $y<br> ";





echo '_____________U3____________<br><br><br><br>';
$actor_name= 'Johnny';
$actor_surname= 'Depp';
$actor_fullname= $actor_name.$actor_surname. "kintamasis sujungtas is dvieju kintamuju";
echo "$actor_fullname <br>";





echo '_____________U4____________<br><br><br><br>';
$actor_name= 'Johnny';
$actor_surname= 'Depp';
$actor_last3digits= "3 paskutines raides ". strtoupper(substr($actor_name, -3))." ".strtoupper(substr($actor_surname,-3));
echo"$actor_last3digits<br> ";




echo '_____________U5____________<br><br><br><br>';
$_1=  "An American in Paris";
$_2 = str_ireplace('a', '*', $_1);

echo "$_2 ireplace funkcija<br> ";



echo '_____________U6____________<br><br><br><br>';
$_1=  "An American in Paris";

echo substr_count(strtolower($_1), "a")." funkcija substr_count  An American in Paris a raides surasti <br> ";




echo '_____________U7____________<br><br><br><br>';
$_1=  "An American in Paris";
$_2=  "Breakfast at Tiffany's";
$_3=  "2001: A Space Odyssey";
$_4=  "It's a Wonderful Life";
$vow= ['a','e','i','o','u'];


echo"$_1 <br> $_2 <br> $_3  <br> $_4 <br> istrinus balses =>>>>>> <br> ".str_ireplace($vow, "", $_1 )."<br> ".str_ireplace($vow,"",$_2)."<br> ".str_ireplace($vow,"",$_3)."<br> ".str_ireplace($vow,"",$_4)."<br> ";



echo '_____________U8____________<br><br><br><br>';

$y= explode(" ",'Star Wars: Episode '.str_repeat(' ', rand(0,5)). ($x=rand(1,9)). ' - A New Hope <br>');

echo "Epizodo numeris ".$x."<br>" ;
echo "Epizodo numeris ".implode(array_filter($y, "is_numeric"))."<br>" ;


echo"<br> ";
echo '_____________U9____________<br><br><br><br>';

echo " Zodziu su 5 raidem ir maziau 1 sakinys ".
$x = count(array_filter(explode(" ","Don't Be a Menace to South Central While Drinking Your Juice in the Hood"), function($string) {
    return strlen($string) <= 5;
}))." Zodziu su 5 raidem ir maziau 2 sakinys ".
$x = count(array_filter(explode(" ","Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale"), function($string) {
    return strlen($string) <= 5;
}));

echo"<br> ";
echo '_____________U10____________<br><br><br><br>';
function generateRandomString($length = 3) {
    $characters = 'abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}

echo generateRandomString()."<br> ";


echo '_____________U11____________<br><br><br><br>';





function generateRandomStringa($length = 10) {
    $x = explode(" ","Don't Be a Menace to South Central While Drinking Your Juice in the Hood");
    $characters = $x;
    $charactersLength = count($characters);
    $randomString = ' ';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
echo generateRandomStringa()."<br> ";

?>
