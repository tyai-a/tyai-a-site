<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
  $title = 'トップページ | Tyai-a.site';
  $description = 'tyai-aの個人サイトです。制作物や学んだことを記録・公開しています。';
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

<!-- ========== HERO ========== -->
<div class="relative">
  <div class="absolute inset-0 z-20 bg-gradient-to-r from-hero-gradient-from to-hero-gradient-to bg-cover bg-center bg-no-repeat "></div>
  <div class="container mx-auto relative z-30 pt-20 pb-12 sm:pt-48 sm:pb-48">
    <div class="flex flex-col items-center justify-center lg:flex-row">
      <div class="pt-8 sm:pt-10 lg:pl-8 lg:pt-0">
        <h1 class="text-center font-bold text-4xl dark:text-white sm:text-left sm:text-5xl md:text-6xl">Tyai-a.site</h1>
        <div class="flex flex-col justify-center pt-3 sm:flex-row sm:pt-5 lg:justify-start">
          <div class="flex flex-col justify-center pl-0 sm:justify-start md:pl-1">
            <p class="font-semibold text-md dark:text-white">tyai-aのポートフォリオトへようこそ。</p>
            <p class="font-semibold text-md dark:text-white">制作物や学んだことを記録・公開しています。</p>
          </div>
          <div class="flex items-center justify-center pt-5 pl-2 sm:justify-start sm:pt-0">
            <a href="/">
              <i class="bx bxl-facebook-square text-2xl text-white hover:text-yellow"></i>
            </a>
            <a href="/" class="pl-4">
              <i class="bx bxl-twitter text-2xl text-white hover:text-yellow"></i>
            </a>
            <a href="/" class="pl-4">
              <i class="bx bxl-dribbble text-2xl text-white hover:text-yellow"></i>
            </a>
            <a href="/" class="pl-4">
              <i class="bx bxl-linkedin text-2xl text-white hover:text-yellow"></i>
            </a>
            <a href="/" class="pl-4">
              <i class="bx bxl-instagram text-2xl text-white hover:text-yellow"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- ========== END HERO ========== -->

</main>
<!-- ========== END MAIN CONTENT ========== -->
<?php include($root.'/inc/footer.php'); ?>
</body>
</html>
