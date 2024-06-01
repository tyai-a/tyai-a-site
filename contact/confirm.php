<?php
  session_cache_limiter('none'); //不要なHTTPヘッダを出力しない
  session_start(); //セッション開始
  $_SESSION['error-msg-validate'] = array();
  
  //POSTされたトークンを変数にセット
  if( isset($_POST['token']) ) {
    $token = $_POST['token'];
  }
  
  //セッション変数のトークンを変数にセット
  if( isset($_SESSION['token']) ) {
    $session_token = $_SESSION['token'];
  }

  //セッション変数のトークンを削除
  unset($_SESSION['token']);
  
  //トークンの判定
  if ( ( empty($token) || $token != $session_token) ) {
    $_SESSION['error-msg'] = '不正なリクエストです。'; //セッション変数にエラーメッセージを設定
    header('Location: /contact/' ); //フォームのTOPページに遷移
    exit;
  }
  $_SESSION['token'] = $token; //セッション変数にトークンをセット
  
  // エスケープ関数
  function h( $str ) {
    return htmlspecialchars( $str, ENT_QUOTES, 'UTF-8' );
  }

  //件名
  $subjectAdmin = '';
  $subjectUser = '';
  $date_now = date("Y/m/d");
  $errorFlag = 0;
  
  // バリデート
	$reg_email = "/^([a-zA-Z0-9])+([a-zA-Z0-9._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9._-]+)+$/";
  if(($_POST['email'] == "")){
    array_push($_SESSION['error-msg-validate'], "メールアドレスを入力してください。");
    $errorFlag = 1;
  }
  else if (!preg_match($reg_email, $_POST['email'])) {
    array_push($_SESSION['error-msg-validate'], "メールアドレスをもう一度お確かめください。");
    $errorFlag = 1;
  }		

  // 隠しパラメータセット
  $send_hidden = <<<EOF
  <input type="hidden" name="step" value="2" />
  <input type="hidden" name="day_stmp" value="{$date_now}" />

  <input type="hidden" name="name" value="{$_POST['name']}" />
  <input type="hidden" name="email" value="{$_POST['email']}" />
  <input type="hidden" name="message" value="{$_POST['message']}" />
  EOF;
  
  // メール送信
  function sendMail(){
    // 個別Ver
    $to = "example@gmail.com";
    $toName = "宛名";
    $subject = "件名";
    $body = "ここに内容をいれます";
    $from = "from@example.com";
    $fromName = "配信元日本語名";
  }

  if(isset($_POST["step"]) == "2"){
    sendMail();
  }

  // print_r($_SESSION);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
  $title = '送信確認 | お問い合わせ | Tyai-a.site';
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
    <li class="inline-flex items-center">
      <a class="flex items-center text-xs text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="/contact/">
      お問い合わせ
      </a>
      <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
      送信確認
    </li>
  </ol>
</div>

<div class="bg-gray-50 dark:bg-gray-700">
<div class="container px-5 py-16 mx-auto">

<div class="mx-auto max-w-2xl">
    <!-- Card -->
    <div class="p-4 relative z-10 bg-white border rounded-xl md:p-10 dark:bg-neutral-900 dark:border-neutral-700">

      <ul class="relative flex flex-col md:flex-row md:mx-auto gap-2 md:w-8/12">
        <!-- Item -->
        <li class="md:shrink md:basis-0 flex-1 group flex gap-x-2 md:block">
          <div class="min-w-7 min-h-7 flex flex-col items-center md:w-full md:inline-flex md:flex-wrap md:flex-row text-xs align-middle">
            <span class="size-7 flex justify-center items-center flex-shrink-0 bg-gray-100 font-medium text-gray-800 rounded-full dark:bg-neutral-700 dark:text-white">
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
            <span class="size-7 flex justify-center items-center flex-shrink-0 bg-blue-600 font-medium text-white rounded-full">
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

        <form action="confirm.php" method="POST">
          <div class="mb-4 sm:mb-8 pb-4 border-b border-gray-200 dark:border-neutral-700">
            <label for="hs-feedback-post-comment-name-1" class="block mb-2 text-sm font-medium dark:text-white">お名前</label>
            <div class="mt-1"><?php echo h(nl2br($_POST['name']));?></div>
          </div>

          <div class="mb-4 sm:mb-8 pb-4 border-b border-gray-200 dark:border-neutral-700">
            <label for="hs-feedback-post-comment-email-1" class="block mb-2 text-sm font-medium dark:text-white">メールアドレス</label>
            <div class="mt-1"><?php echo h(nl2br($_POST['email']));?></div>
          </div>

          <div class="pb-4 border-b border-gray-200 dark:border-neutral-700">
            <label for="hs-feedback-post-comment-textarea-1" class="block mb-2 text-sm font-medium dark:text-white">お問い合わせ内容</label>
            <div class="mt-1"><?php echo h(nl2br($_POST['message']));?></div>
          </div>

          <div class="mt-6 grid sm:grid-cols-2 gap-4">
            <?php
              $token = uniqid('', true); //トークンの生成
              $_SESSION['token'] = $token; //セッション変数にトークンをセット
            ?>
            <?php echo($send_hidden); ?>
            <input type="hidden" name="token" value="<?php echo $token; ?>">
            <button type="button" onclick="history.back()" class="w-full py-3 px-4 inline-flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent bg-gray-100 font-medium text-gray-800 hover:bg-gray-200 dark:bg-neutral-700 dark:text-white dark:hover:bg-neutral-600  disabled:opacity-50 disabled:pointer-events-none">入力画面に戻る</button>
            <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">送信する</button>
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