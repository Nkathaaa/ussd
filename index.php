<?php

$sessionId=$_POST['sessionId'];
$serviceCode=$_POST['serviceCode'];
$phoneNumber=$_POST['phoneNumber'];
$text=$_POST['text'];

//lssify user input
if($text="")
{
//This is the fisrt request
    $response="CON what  would  you want to check \n";
    $response .= "1.My Account No \n";
    $response .= "2.My phone Number";
}else if($text =="1")
{
    $response ="CON choose account information you wnat to view \n";
    $response.="1.Account Number\n";
    $respose=.="2.Account Balance";
}
else if($text=="2")
{
    $response="End your phone number is".$phoneNumber;
}
else if ($text == "1*1")
{
  $accountNumber="ACC1029";
  $response.="End yu account umber is ".$accountNumber;
}
else if($test=="1*2")
{
    $balance=" kes 10,000";
    $response="End you balance is".$balance
}
header('content-type ; text/plain');
echo $response
?>