<?php

//preg_match("/(^[a-zA-Z0-9]+([a-zA-Z\_0-9\.-]*))$/" , $filename
$ar_name = $_REQUEST['name'];
$ar_name = trim($ar_name);
$ar_name = addslashes($ar_name);
$ar_name = htmlspecialchars ($ar_name);
$ar_name = preg_replace("/[^a-zA-Z0-9]/", "", $ar_name);

if ($ar_name == "") {
 echo "|Некорректное имя файла";
 exit;
}

echo $ar_name.'|';

$ar_phone = $_REQUEST['phones'];
$phone = explode("\r\n", $ar_phone);
$nums = array();
$i=0;
foreach ($phone as $phon){
 $phon=trim($phon);
 $phon = preg_replace("/[^0-9]/", "", $phon);
 $l = strlen($phon);
 if ($l < 7 OR $l == 8 OR $l == 9){}
  else {
   if ($l == 7) $phon = '495'.$phon;
   if ($l >= 11) $phon = substr($phon, -10);
   $nums[$i] = '8'.$phon;
   $i++;
  }
}

if ($nums) {
 $result = array_unique($nums);
 $f = fopen("files/".$ar_name.".txt", "w");
 foreach ($result as $res){
  fwrite($f, $res."\r\n"); 
  echo $res.'<br/>';
 }
 fclose($f);
}
else echo 'Не удалось найти ни одного номера.';


echo $phone[6387484];