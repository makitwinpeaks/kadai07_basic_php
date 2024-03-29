

<?php

$date = date("Y/m/d H:i:s");
$name   = $_POST["name"];
$email  = $_POST["email"];
$rate   = $_POST["rate"];
$reason   = $_POST["reason"];
$opinion   = $_POST["opinion"];

$c      = ",";
$str =  $date.$c.$name.$c.$email.$c.$rate.$c.$reason.$c.$opinion;


//ファイルに追加書き込み
$file = fopen("question.csv","a");
fwrite($file, $str."\n");       // \nは改行コード
fclose($file);

//index.phpに戻る
header("Location: index.php");
exit;

?>

