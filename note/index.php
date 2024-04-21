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

<a href="ubuntu_22044_mount_storage/" class="p-4 md:w-1/2 lg:w-1/3">
<div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden bg-white dark:bg-gray-700">
<img class="lg:h-64 md:h-36 w-full object-cover object-center" src="/img/note/thumbnail/ubuntu.png" alt="blog">
<div class="p-6 border-t-2 border-gray-200 border-opacity-60">
<div class="flex gap-2 mb-3">
  <span class="py-1 px-2 text-sm font-medium rounded-md border border-gray-400 bg-gray-100 text-gray-600 dark:bg-neutral-800/25 dark:border-neutral-500 dark:text-neutral-300">Ubuntu</span>
</div>
<p class="text-xl font-medium text-gray-900 dark:text-white mb-3">Ubuntu 22.04LTS で /cgi-bin/ 下のHTMLファイルを開くと500エラーとなる問題を解決</p>
<p class="leading-relaxed dark:text-gray-400 mb-3">

解決したい問題 /cgi-bin/下のHTMLファイルを開くと500 InternalServerE...
</p>
<div class="flex flex-col justify-end sm:flex-row gap-1 sm:gap-3 text-sm font-normal text-gray-600 dark:text-gray-400 mt-3">
  <time class="flex items-center gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-9 w-4"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 7.5 12"></polyline></svg>
  	公開日: 2024年4月10日 03:51
  </time>
</div>
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