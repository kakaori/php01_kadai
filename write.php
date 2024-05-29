<?php
// エラーを出力する
ini_set( 'display_errors', 1 );

$name = $_POST['name'];
$mail = $_POST['mail'];
$km = ',';

$date = date('Y-m-d H:i:s');

//書き込む文字を作成
$str = $date.$km.$name.$km.$mail;

//file書き込み
$file = fopen('data/data.txt','a'); //ファイルOPEN
fwrite($file, $str."\n"); //書き込み　正規表現の時は""を使う
fclose($file); //ファイル閉じる

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <!-- <link rel="stylesheet" href="./css/output.css"> -->
    <title>アンケートアプリ（登録・表示）｜書き込み</title>

</head>
<body>
    
<h1>登録完了しました</h1>
<h2>登録内容</h2>

<p><?php echo $name?></p>
<p><?php echo $mail?></p>
<p><?php echo $date?></p>

<p><a href="read.php">結果を表示</a></p>

<!-- つけたいやつ -->
<!-- バリデーション -->
<!-- 必須 -->


</body>
</html>