
<?php
// ファイルを変数に格納
$filename = 'question.csv';
 
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');
 
// whileで行末までループ処理
while (!feof($fp)) {
 
  // fgetsでファイルを読み込み、変数に格納
  $txt = fgets($fp);
 
  // ファイルを読み込んだ変数を出力
  echo $txt.'<br>';
}
 
// fcloseでファイルを閉じる
fclose($fp);

?>

