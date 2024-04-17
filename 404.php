<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
  $title = '404 NotFound | Tyai-a.site';
  $description = 'ページが見つかりませんでした。';
  $url = ''; 
  $is_home = true; // トップページのみ記載
  $root = $_SERVER['DOCUMENT_ROOT'];
  include($root.'/inc/head.php');
  ?>
</head>
<body class="dark:bg-gray-800">
<?php include($root.'/inc/header.php'); ?>
<!-- ========== MAIN CONTENT ========== -->
<main id="content">
<div class="text-center py-10 px-4 sm:px-6 lg:px-8">
	<h1 class="block text-7xl font-bold text-gray-800 dark:text-white">404</h1>
	<p class="mt-3 text-gray-600 dark:text-gray-400">申し訳ありません。ページが見つかりませんでした。<p>
	<div class="mt-5 flex flex-col justify-center items-center gap-2 sm:flex-row sm:gap-3">
	<a class="w-full sm:w-auto py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="/">
		<svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m15 18-6-6 6-6"/></svg>
		トップページへもどる
	</a>
	</div>
</div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
<?php include($root.'/inc/footer.php'); ?>
</html>
