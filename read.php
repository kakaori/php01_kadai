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
    <link rel="stylesheet" href="./css/output.css">
    <title>アンケートアプリ（登録・表示）｜表示</title>
</head>
<body class="text-gray-600">

<div class="bg-white mx-auto max-w-screen-md pb-6 sm:pb-8 lg:pb-12">
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <header class="flex items-center justify-between py-4 md:py-8">
      <!-- logo - start -->
      <a href="./" class="items-center gap-2.5 text-2xl font-bold md:text-3xl" aria-label="logo">
        <img class="w-48" src="https://gsacademy.jp/assets/images/header/logo.svg">
      </a>
      <!-- logo - end -->

      <!-- nav - start -->
      <nav class="gap-12">
        <a href="./read.php" class="text-lg transition duration-100 hover:text-gray-500 active:text-gray-700">結果一覧</a>
      </nav>
      <!-- nav - end -->

    </header>

  </div>
</div>


<div class="bg-white">
    <div class="mx-autolg px-4 md:px-8">
        <h2 class="mb-4 text-center text-2xl font-bold md:mb-8 lg:text-3xl xl:mb-12">LAB17 ギークへのアンケート結果</h2>

        <div class="mx-auto max-w-screen-sm mb-8">
            <p class="text-sm">質問１ CREDOに則り、自らのチカラでセカイを変えようとする全ての挑戦を讃えていますか？</p>
            <p class="text-sm">質問２ コミュニティの活性化に自ら貢献していますか？</p>
            <p class="text-sm">質問３ クラスメイトに対して改善してほしい点があれば教えてください。</p>
            <p class="text-sm">質問４ クラスメイトに対して特に感謝していることや、良かった点があれば教えてください。</p>
            <p class="text-sm">質問５ クラス全体の雰囲気を良くするために、どのような取り組みが有効だと思いますか？</p>
            <p class="text-sm">質問６ コスモは燃えていますか？</p>
        </div>

        <div class="w-full mx-auto overflow-auto">

        <?PHP 

        //ファイルを変数に格納
        $filename = 'data/data.txt';

        //fopenでファイルを開く(rは読み込みモード)
        $fp = fopen($filename, 'r');

        echo "<table class='table-auto w-full text-left whitespace-no-wrap'>";
        echo "<tr>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl'>回答日時</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>ニックネーム</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>質問１</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>質問２</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>質問３</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>質問４</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100'>質問５</th>
        <th class='px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tr rounded-br'>質問６</th>
        </tr>";


        //whileで行末までループ処理
        while(!feof($fp)){
            $txt = fgets($fp);
            $txtarray = explode(",",$txt);//配列にする
            
            //配列の長さを調べる
            //その数分for文を回す

            //ファイルを読み込んだ変数を出力
            echo "<tr>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[0]</th>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[1]</td>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[2]</td>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[3]</td>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[4]</td>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[5]</td>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[6]</td>
            <td class='border-t-2 border-gray-200 px-4 py-3'>$txtarray[7]</td>
            </tr>";
        }
        echo "</table>";

        //fcloseでファイルを閉じる
        fclose($fp);
        ?>

        </div>

        <div><img class="m-auto" src="./img/cool_geek_actwithpassion.png" alt=""></div>
    </div>
</div>

<footer class="mx-auto py-8">
  <div class="py-8 pb-0 border-t text-center text-sm text-gray-300">© 2024 - kadai.</div>
</footer>

</body>
</html>