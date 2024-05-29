<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="./css/output.css">
    <title>アンケートアプリ（登録・表示）｜入力</title>
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
  <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
    <!-- text - start -->
    <div class="mb-10 md:mb-16">
      <h2 class="mb-4 text-center text-2xl font-bold md:mb-6 lg:text-3xl">LAB17 ギークへのアンケート</h2>

    </div>
    <!-- text - end -->

    <!-- form - start -->
    <form action="write.php" method="post" class="mx-auto grid max-w-screen-md gap-4 sm:grid-cols-2">

      <!-- ニックネーム -->
      <div class="sm:col-span-2">
        <label for="name" class="mb-2 inline-block text-sm sm:text-base">ニックネーム</label>
        <input name="name" class="w-full rounded border bg-gray-50 px-3 py-3 outline-none ring-gray-300 transition duration-100 focus:ring" required />
      </div>

      <!-- クレド -->
      <div class="sm:col-span-2">
        <label for="credo" class="mb-2 inline-block text-sm sm:text-base">CREDOに則り、自らのチカラでセカイを変えようとする全ての挑戦を讃えていますか？</label>
          <div class="flex justify-between grid gap-x-8 gap-y-4 grid-cols-3">
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="credo" value="讃えている" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>讃えている</label>
            </div>
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="credo" value="はい" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>はい</label>
            </div>
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="credo" value="Yes" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>Yes</label>
            </div>
          </div>
      </div>

      <!-- コミュニティ -->
      <div class="sm:col-span-2">
        <label for="community" class="mb-2 inline-block text-sm sm:text-base">コミュニティの活性化に自ら貢献していますか？</label>
          <div class="flex justify-between grid gap-x-8 gap-y-4 grid-cols-3">
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="community" value="している" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>している</label>
            </div>
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="community" value="はい" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>はい</label>
            </div>
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="community" value="Yes" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>Yes</label>
            </div>
          </div>
      </div>

      <!-- 改善 -->
      <div class="sm:col-span-2">
        <label for="improvement" class="mb-2 inline-block text-sm sm:text-base">クラスメイトに対して改善してほしい点があれば教えてください。</label>
        <textarea name="improvement" class="w-full rounded border bg-gray-50 px-3 py-2 outline-none ring-gray-300 transition duration-100 focus:ring" required></textarea>
      </div>
  
      <!-- ありがとう -->
      <div class="sm:col-span-2">
        <label for="thanks" class="mb-2 inline-block text-sm sm:text-base">クラスメイトに対して特に感謝していることや、良かった点があれば教えてください。</label>
        <textarea name="thanks" class="w-full rounded border bg-gray-50 px-3 py-2 outline-none ring-gray-300 transition duration-100 focus:ring" required></textarea>
      </div>

      <!-- 取り組み -->
      <div class="sm:col-span-2">
        <label for="message" class="mb-2 inline-block text-sm sm:text-base">クラス全体の雰囲気を良くするために、どのような取り組みが有効だと思いますか？</label>
        <textarea name="message" class="w-full rounded border bg-gray-50 px-3 py-2 outline-none ring-gray-300 transition duration-100 focus:ring" required></textarea>
      </div>

      <!-- コスモ -->
      <div class="sm:col-span-2">
        <label for="cosmos" class="mb-2 inline-block text-sm sm:text-base">コスモは燃えていますか？</label>
          <div class="flex justify-between grid gap-x-8 gap-y-4 grid-cols-3">
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="cosmos" value="燃えている" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>燃えている</label>
            </div>
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="cosmos" value="はい" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>はい</label>
            </div>
            <div>
              <label class="ring-gray-200 has-[:checked]:ring-gray-500 has-[:checked]:bg-gray-50 grid grid-cols-[5px_1fr_auto] items-center gap-6 rounded-lg p-4 ring-2 hover:bg-gray-50 cursor-pointer mb-2"><input type="radio" name="cosmos" value="Yes" class="box-content h-1.5 w-1.5 appearance-none rounded-full border-[5px] ring-1 ring-gray-950/10 checked:border-gray-500 checked:ring-gray-500" required>Yes</label>
            </div>
          </div>
      </div>

      <div class="items-center justify-between sm:col-span-2">
        <button class="inline-block rounded-lg bg-gray-500 px-8 py-3 text-center text-sm font-semibold text-white outline-none ring-gray-300 transition duration-100 hover:bg-gray-600 focus-visible:ring active:bg-gray-700 md:text-base">送信する</button>
      </div>

    </form>
    <!-- form - end -->
  </div>
</div>

<footer class="mx-auto py-8">
  <div class="py-8 pb-0 border-t text-center text-sm text-gray-300">© 2024 - kadai.</div>
</footer>

</body>
</html>