<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
  $title = '備忘録 | Tyai-a.site';
  $description = '学んだことを記録しています。アウトアップの単位は小さくしています。';
  $url = 'note/'; 
  $is_home = true; // トップページのみ記載
  $root = $_SERVER['DOCUMENT_ROOT'];
  $content_header_show = true;
  $content_header_title = "&#x1F4DD; 備忘録";
  $content_header_summary = "学んだことを記録しています。アウトアップの単位は小さくしています。";
  include($root.'/inc/head.php');
  ?>
</head>
<body class="dark:bg-gray-800">
<?php include($root.'/inc/header.php'); ?>
<?php include($root.'/inc/content-header.php'); ?>
<section class="text-gray-600 body-font">

<div class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 py-5 lg:px-8 border-b border-gray-200  dark:bg-gray-800 dark:border-gray-700">
  <ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
      <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="/">
        トップページ
      </a>
      <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
      備忘録
    </li>
  </ol>
</div>

<div class="bg-gray-50 dark:bg-gray-700">
<div class="container px-5 py-16 mx-auto">

<div class="flex flex-wrap -m-4">

<a href="https://tyai-a.site/note/fix_500error_cgi_bin_to_html/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/ubuntu.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Ubuntu</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">Ubuntu 22.04LTS で /cgi-bin/ 下のHTMLファイルを開くと500エラーとなる問題を解決</h1>
<p class="leading-relaxed dark:text-white mb-3">

解決したい問題 /cgi-bin/下のHTMLファイルを開くと500 InternalServerE...
</p>
</div>
</div>
</a>




<a href="https://tyai-a.site/note/nextcloud_error_client_not_https/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/nextcloud.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">NextCloud</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">NextCloud のクライアントソフトのエラーを解消</h1>
<p class="leading-relaxed dark:text-white mb-3">

NextCloud のクライアントソフトをインストールし、ログインURLを設定した際に以下のようなエ...
</p>
</div>
</div>
</a>




<a href="https://tyai-a.site/note/problem_nextcloud_setup/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/nextcloud.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">NextCloud</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">NextCloud のインストールで躓いた</h1>
<p class="leading-relaxed dark:text-white mb-3">

自宅サーバーに NextCloud をインストールしたのですが、 初回セットアップ時に必ず必要となる...
</p>
</div>
</div>
</a>




<a href="https://tyai-a.site/note/check_php_modules/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/php.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">PHP</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">インストールされているPHPモジュールを確認する</h1>
<p class="leading-relaxed dark:text-white mb-3">

インストールされているPHPモジュールを確認してみます。 コマンドラインで php -m と入力すれ...
</p>
</div>
</div>
</a>




<a href="https://tyai-a.site/note/ubuntu_22044_mount_storage/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/ubuntu.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Ubuntu</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">Ubuntu 22.04.4 で増設したSSDを使用する</h1>
<p class="leading-relaxed dark:text-white mb-3">

Ubuntu 22.04.4 にSATA接続のSSDを増設しました。 データを保存できるストレージと...
</p>
</div>
</div>
</a>




<a href="https://tyai-a.site/note/basic_commnad_mysql/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/mysql.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MySQL</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">MySQLの基礎的なコマンド集</h1>
<p class="leading-relaxed dark:text-white mb-3">

操作方法を忘れることが多いので記事としてまとめておき、あとで見返せるようにしておきます。 文末のセミ...
</p>
</div>
</div>
</a>




<a href="https://tyai-a.site/note/tailwind_css_prose/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-48 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/tailwind_css.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Tailwind CSS</h2>
<h1 class="title-font text-lg font-medium text-gray-900 dark:text-white mb-3">Tailwind CSS の proseクラス で記事の見た目を整える</h1>
<p class="leading-relaxed dark:text-white mb-3">

Tailwind CSS に @tailwindcss/typography という公式プラグインを...
</p>
</div>
</div>
</a>


</div>
</div>
</div>
</section>

<?php include($root.'/inc/footer.php'); ?>
</body>
</html>