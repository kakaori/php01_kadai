<?PHP 
// エラーを出力する
// ini_set( 'display_errors', 1 );

// //ファイルを変数に格納
// $filename = 'data/data.txt';

//fgetsでファイルを読み込み、変数に格納
// $txt = fgets($fp);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <!-- <link rel="stylesheet" href="./css/output.css"> -->
    <title>アンケートアプリ（登録・表示）｜表示</title>
</head>
<body>

<h1>結果画面</h1>

<?PHP 

//ファイルを変数に格納
$filename = 'data/data.txt';

//fopenでファイルを開く(rは読み込みモード)
$fp = fopen($filename, 'r');

echo "<table>";
echo "<tr class='bg-amber-100'><th class='border p-4'>日時</th><th class='border p-4'>名前</th><th class='border p-4'>メール</th></tr>";


//whileで行末までループ処理
while(!feof($fp)){
    $txt = fgets($fp);
    $txtarray = explode(",",$txt);//配列にする
    
    //配列の長さを調べる
    //その数分for文を回す

    //ファイルを読み込んだ変数を出力
    echo "<tr><th class='border p-4'>$txtarray[0]</th><td class='border p-4'>$txtarray[1]</td><td class='border p-4'>$txtarray[2]</td></tr>";
}
echo "</table>";


//fcloseでファイルを閉じる
fclose($fp);
?>

</body>
</html>