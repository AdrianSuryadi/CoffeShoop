<?php
$db_name = 'mysql:host=localhost;dbname=coffeshop';
$db_user = 'root';
$db_password = '';

$conn = new PDO($db_name,$db_user,$db_password);

if ($conn){
  echo "";
}
function unique_id(){
  $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $charlenght= strlen($chars);
  $randomString = '';
  for ($i=0; $i <20 ; $i++){
    $randomString.=$chars[nt_rand(0, $charlenght - 1)];
  }
  return $randomString;
  }
?>