<?php
  session_cache_limiter('none'); //不要なHTTPヘッダを出力しない
  $_SESSION = array(); //セッション変数の初期化
  session_start(); //セッションの開始
  // print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
  $title = 'お問い合わせ | Tyai-a.site';
  $description = 'サイトの管理者にお問い合わせ';
  $url = 'work/'; 
  $is_home = true; // トップページのみ記載
  $root = $_SERVER['DOCUMENT_ROOT'];
  $content_header_show = false;
  $content_header_title = "&#x2709; お問い合わせ";
  $content_header_summary = "サイトの管理者にお問い合わせ";
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
      <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="/">
        トップページ
      </a>
      <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
      お問い合わせ
    </li>
  </ol>
</div>

<div class="bg-gray-50 dark:bg-gray-700">
<div class="container px-5 py-16 mx-auto">

<div class="mx-auto max-w-2xl">

  <?php if( isset($_SESSION['error-msg']) ) : ?>
    <div class="bg-red-50 border border-red-200 text-sm text-red-800 rounded-lg p-4 mb-5 dark:bg-red-800/10 dark:border-red-900 dark:text-red-500" role="alert">
    <div class="flex">
      <div class="flex-shrink-0">
        <svg class="flex-shrink-0 size-4 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"></circle>
          <path d="m15 9-6 6"></path>
          <path d="m9 9 6 6"></path>
        </svg>
      </div>
      <div class="ms-4">
        <h3 class="text-sm font-semibold">
          エラーが発生しました。
        </h3>
        <div class="mt-2 text-sm text-red-700 dark:text-red-400">
          <ul class="list-disc space-y-1 ps-5">
            <li>
              <?php print $_SESSION['error-msg']; ?>
            </li>
            <?php if( isset($_SESSION['error-msg-validate']) ) : ?>
              <li><?php print $_SESSION['error-msg-validate']; ?></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php unset($_SESSION['error-msg']); //セッション変数内のエラーの削除 ?>
  <?php unset($_SESSION['error-msg-validate']); //セッション変数内のエラーの削除 ?>
  <?php endif; ?>
    

    
    <!-- Card -->
    <div class="p-4 relative z-10 bg-white border rounded-xl md:p-10 dark:bg-neutral-900 dark:border-neutral-700">

      <ul class="relative flex flex-col md:flex-row md:mx-auto gap-2 md:w-8/12">
        <!-- Item -->
        <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:block">
          <div class="min-w-7 min-h-7 flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
            <span class="size-7 flex justify-center items-center flex-shrink-0 bg-blue-600 font-medium text-white rounded-full">
              1
            </span>
            <div class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden dark:bg-neutral-700"></div>
          </div>
          <div class="grow md:grow-0 md:mt-3 pb-5">
            <span class="block text-sm font-bold text-gray-800 dark:text-white">
              入力
            </span>
            <p class="text-xs text-gray-500 dark:text-neutral-500">
              情報の入力
            </p>
          </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:block">
          <div class="min-w-7 min-h-7 flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
            <span class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-neutral-700 dark:text-white">
              2
            </span>
            <div class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden dark:bg-neutral-700"></div>
          </div>
          <div class="grow md:grow-0 md:mt-3 pb-5">
            <span class="block text-sm font-bold text-gray-800 dark:text-white">
              確認
            </span>
            <p class="text-xs text-gray-500 dark:text-neutral-500">
              入力情報の確認
            </p>
          </div>
        </li>
        <!-- End Item -->

        <!-- Item -->
        <li class="md:shrink md:basis-16 flex-1 md:flex-initial group flex gap-x-2 md:block">
          <div class="min-w-7 min-h-7 flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
            <span class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-neutral-700 dark:text-white">
              3
            </span>
            <div class="mt-2 w-px h-full md:mt-0 md:ms-2 md:w-full md:h-px md:flex-1 bg-gray-200 group-last:hidden dark:bg-neutral-700"></div>
          </div>
          <div class="grow md:grow-0 md:mt-3 pb-5">
            <span class="block text-sm font-bold text-gray-800 dark:text-white">
              完了
            </span>
            <p class="text-xs text-gray-500 dark:text-neutral-500">
            送信完了
            </p>
          </div>
        </li>
        <!-- End Item -->
      </ul>

      <div class="mt-3">
        <form action="confirm.php" method="post">
          <div class="mb-4 sm:mb-8">
            <label
              for="name"
              class="block mb-2 text-sm font-medium dark:text-white"
            >お名前</label>
            <input 
              type="text"
              id="name"
              name="name"
              placeholder="お名前"
              class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            >
          </div>

          <div class="mb-4 sm:mb-8">
            <label
              for="email"
              class="block mb-2 text-sm font-medium dark:text-white"
            >メールアドレス</label>
            <input
              type="email"
              name="email"
              id="email"
              id="hs-feedback-post-comment-email-1"
              placeholder="メールアドレス"
              class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            >
          </div>

          <div>
            <label
              for="hs-feedback-post-comment-textarea-1"
              class="block mb-2 text-sm font-medium dark:text-white"
            >お問い合わせ内容</label>
            <div class="mt-1">
              <textarea
                id="message"
                name="message"
                rows="3"
                placeholder=""
                class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
              ></textarea>
            </div>
          </div>

          <div class="mt-6 grid">
            <?php
              $token = uniqid('', true); //トークンの生成
              $_SESSION['token'] = $token; //セッション変数にトークンをセット
            ?>

            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">確認画面へ</button>
            
          </div>
        </form>
      </div>
    </div>
    <!-- End Card -->
  </div>

</div>
</div>
</section>

<?php include($root.'/inc/footer.php'); ?>
</body>
</html>