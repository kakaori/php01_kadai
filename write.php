<?php
// エラーを出力する
ini_set( 'display_errors', 1 );

$name = $_POST['name'];
// $mail = $_POST['mail'];
$credo = $_POST['credo'];
$community = $_POST['community'];
$improvement = $_POST['improvement'];
$thanks = $_POST['thanks'];
$message = $_POST['message'];
$cosmos = $_POST['cosmos'];
$km = ',';

$date = date('Y-m-d H:i:s');

//書き込む文字を作成
$str = $date.$km.$name.$km.$credo.$km.$community.$km.$improvement.$km.$thanks.$km.$message.$km.$cosmos;

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
    <link rel="stylesheet" href="./css/output.css">
    <title>アンケートアプリ（登録・表示）｜書き込み</title>

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
        <a href="./read.php" class="text-lg font-semibold transition duration-100 hover:text-gray-500 active:text-gray-700">結果一覧</a>
      </nav>
      <!-- nav - end -->

    </header>

  </div>
</div>

<div class="bg-white">
  <div class="mx-auto max-w-screen-md px-4 md:px-8">
    <p class="mb-4 text-center text-xl font-bold md:mb-6 lg:text-xl">LAB17 ギークへのアンケート</p>
    <h2 class="mb-4 text-center text-2xl font-bold md:mb-8 lg:text-3xl xl:mb-12">送信が完了しました</h2>
    <span class="block text-sm text-gray-500">回答日時：<?php echo $date?></span>

    <div class="divide-y">
      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">ニックネーム</span>
        </div>
        <p class="text-gray-600"><?php echo $name?></p>
      </div>
      <!-- review - end -->

      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">CREDOに則り、自らのチカラでセカイを変えようとする全ての挑戦を讃えていますか？</span>
        </div>

        <p class="text-gray-600"><?php echo $credo?></p>
      </div>
      <!-- review - end -->

      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">コミュニティの活性化に自ら貢献していますか？</span>
        </div>

        <p class="text-gray-600"><?php echo $community?></p>
      </div>
      <!-- review - end -->

      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">クラスメイトに対して改善してほしい点があれば教えてください。</span>
        </div>

        <p class="text-gray-600"><?php echo $improvement?></p>
      </div>
      <!-- review - end -->

      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">クラスメイトに対して特に感謝していることや、良かった点があれば教えてください。</span>
        </div>

        <p class="text-gray-600"><?php echo $thanks?></p>
      </div>
      <!-- review - end -->

      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">クラス全体の雰囲気を良くするために、どのような取り組みが有効だと思いますか？</span>
        </div>
        <p class="text-gray-600"><?php echo $message?></p>
      </div>
      <!-- review - end -->

      <!-- review - start -->
      <div class="flex flex-col gap-3 py-4 md:py-8">
        <div>
          <span class="block text-sm font-bold">コスモは燃えていますか？</span>
        </div>
        <p class="text-gray-600"><?php echo $cosmos?></p>
      </div>
      <!-- review - end -->

    </div>
  </div>
</div>

<footer class="mx-auto py-8">
  <div class="py-8 pb-0 border-t text-center text-sm text-gray-300">© 2024 - kadai.</div>
</footer>

</body>
</html>