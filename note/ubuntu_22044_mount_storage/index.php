<!DOCTYPE html>
<html lang="ja">
<head>
  <?php
  $title = 'Ubuntu 22.04.4 で増設したSSDを使用する | 備忘録 | Tyai-a.site';
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

<div class="border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
<div class="relative max-w-[85rem] w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 py-5 lg:px-8">
  <ol class="flex items-center whitespace-nowrap">
    <li class="inline-flex items-center">
      <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="/">
        トップページ
      </a>
      <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center">
      <a class="flex items-center text-sm text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 dark:focus:text-blue-500" href="/note/">
      備忘録
      </a>
      <svg class="flex-shrink-0 mx-2 overflow-visible size-4 text-gray-400 dark:text-neutral-600" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <path d="m9 18 6-6-6-6"></path>
      </svg>
    </li>
    <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate dark:text-gray-200" aria-current="page">
      記事名
    </li>
  </ol>
</div>
</div>

<!-- ========== MAIN CONTENT ========== -->
<main id="content" class="max-w-[70rem] mx-auto">

  <!-- Content -->
  <div class="flex relative w-full">

  <!-- Sidebar -->
  <aside id="docs-sidebar" class="hidden lg:block lg:w-1/5">
    <div id="docs-sidebar-inner" class="hs-overlay hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden sticky z-[60] w-full bg-white border-e border-gray-200 dark:border-gray-700 pe-8 py-10 overflow-y-auto lg:block lg:translate-x-0 lg:top-12 lg:end-auto lg:bottom-0 lg:start-[max(0px,calc(50%-45rem))] lg:z-10 d[&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-slate-700 dark:[&::-webkit-scrollbar-thumb]:bg-slate-500 dark:bg-gray-800">

    <!-- Nav -->
    <nav 
      id="sidebar-nav"
      class="relative space-y-8"
    >
      <h5 class="mb-3 text-sm font-semibold text-slate-900 dark:text-slate-200">目次</h5>
      <ul 
        id="toc"
        class="ms-0.5 space-y-2 border-s-2 border-slate-100 dark:border-slate-800 [--scrollspy-offset:0] md:[--scrollspy-offset:-220]"
        data-hs-scrollspy="#article-body"
      >
      </ul>
    </nav>
    <!-- Nav -->
    
  </div>
  <!-- End Sidebar inner -->
  </aside>
  <!-- End Sidebar -->

<div class="w-full lg:w-4/5">
<article
  id="article-body"
  class="py-10 px-8 max-w-none prose dark:prose-invert"
>

<section class="mb-8">
<h1 class="font-bold break-normal text-gray-900 dark:text-white pb-2 text-3xl md:text-4xl mb-0">Ubuntu 22.04LTS で /cgi-bin/ 下のHTMLファイルを開くと500エラーとなる問題を解決</h1>
<div class="flex flex-col sm:flex-row gap-1 sm:gap-3 text-sm md:text-base font-normal text-gray-600 dark:text-gray-400 mt-3">
  <time class="flex gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-rotate-cw w-5"><path d="M21 12a9 9 0 1 1-9-9c2.52 0 4.93 1 6.74 2.74L21 8"/><path d="M21 3v5h-5"/></svg>
    更新日: 2024年4月10日04:21
  </time>
  <time class="flex gap-2">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-9 w-5"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 7.5 12"/></svg>公開日: 2024年4月10日 03:51
  </time>
</div>
</section>

<p>Ubuntu 22.04.4 にSATA接続のSSDを増設しました。
データを保存できるストレージとして使用できるようにしてみます。</p>

<p>専用ソフトを使えばGUIから操作可能ですが、今回はコマンドラインから操作します。</p>

<h2>接続されているストレージを確認する</h2>

<p><code>parted -l</code>コマンドを実行し、現在接続されているストレージを確認します。</p>

<p>実行にはroot権限が必要です</p>

<pre><code>$ sudo parted -l
</code></pre>

<p>今回の場合、UbuntuはNVME接続のSSDにインストールしています。
今回増設したストレージはSATA接続のSSDです。</p>

<pre><code>モデル: ATA KIOXIA-EXCERIA S (scsi)
ディスク /dev/sda: 480GB
セクタサイズ (論理/物理): 512B/512B
パーティションテーブル: unknown
ディスクフラグ:

モデル: ESO256GTLCW-EP3-2L (nvme)
ディスク /dev/nvme0n1: 256GB
セクタサイズ (論理/物理): 512B/512B
パーティションテーブル: gpt
ディスクフラグ:

番号  開始    終了    サイズ  ファイルシステム  名前                          フラグ
1    1049kB  1075MB  1074MB  fat32             EFI 
...
</code></pre>

<p>増設したストレージの名称は <code>/dev/sda</code> であることが判明しました。
この名称はあとで使うのでどこかにメモしておきます。</p>

<h2>パーティションを作成する</h2>

<p>続いてパーティションを作成します。
<code>parted</code>コマンドを実行します。</p>

<pre><code>$ sudo parted /dev/sda

GNU Parted 3.4
/dev/sda を使用
GNU Parted へようこそ！ コマンド一覧を見るには 'help' と入力してください。
(parted)
</code></pre>

<p><code>(parted)</code>の右にコマンドを入力していきます。</p>

<p>まず、パーティションの形式を決める <code>mklabel</code>コマンドを実行します。今回はGPT形式といたします。</p>

<pre><code>(parted) mklabel gpt
</code></pre>

<p>すでに形式で決まっている場合は警告文が出力されます。</p>

<pre><code>(parted) mklabel gpt
警告: いま存在している /dev/sda のディスクラベルは破壊され、このディスクの全データが失われます。続行しますか？
はい(Y)/Yes/いいえ(N)/No?
</code></pre>

<p>続いてパーティションを作成する <code>mkpart</code>コマンドを実行します。
設定を聞かれますので順番に入力していきます。</p>

<pre><code>(parted) mkpart
パーティションの名前?  []? ssd1
ファイルシステムの種類?  [ext2]? ext4
開始? 0%
終了? 100%
</code></pre>

<h3>H3テスト</h2>

<ul>
<li>パーティションの名称は空白でも問題ありません。ここではssd1と名付けました。</li>
<li>パーティションを複数作成したい場合、再度 <code>mkpart</code>を実行し、 開始? を 0% 終了? を 50% などに設定します。</li>
<li>パーティションが複数ある場合、/dev/sdb1, /dev/sdb2, ... のように割当られていきます。</li>
<li>ファイルシステムはext4とします。ext4, btrfs, xfs などいくつか種類があり、それぞれ特徴があります。その中でも ext4 は知名度が高く、信頼性が高い特徴があります。</li>
</ul>

<p>正しく設定されたかを確認します。</p>

<pre><code>(parted) p
モデル: ATA KIOXIA-EXCERIA S (scsi)
ディスク /dev/sda: 480GB
セクタサイズ (論理/物理): 512B/512B
パーティションテーブル: gpt
ディスクフラグ:

番号  開始    終了   サイズ  ファイルシステム  名前  フラグ
1    1049kB  480GB  480GB   ext4              ssd1

(parted)
</code></pre>

<p>問題なければ終了します。</p>

<pre><code>(parted) q
</code></pre>

<h2>パーティションをフォーマットする</h2>

<p>続いて作成したパーティションをフォーマットする <code>mkfs</code>コマンドを実行します。</p>

<pre><code>sudo mkfs.ext4 /dev/sda

mke2fs 1.46.5 (30-Dec-2021)
Found a gpt partition table in /dev/sda
Proceed anyway? (y,N) y
Discarding device blocks: done
Creating filesystem with 117212886 4k blocks and 29310976 inodes
Filesystem UUID: ******-******-************
Superblock backups stored on blocks:
    32768, 98304, 163840, 229376, 294912, 819200, 884736, 1605632, 2654208,
    4096000, 7962624, 11239424, 20480000, 23887872, 71663616, 78675968,
    102400000

Allocating group tables: done
Writing inode tables: done
Creating journal (262144 blocks): done
Writing superblocks and filesystem accounting information: done
</code></pre>

<h2>ストレージをマウントする</h2>

<p>続いてストレージにアクセスできるようにします。 </p>

<p>LinuxなどのUNIX系OSでは、追加したストレージを特定のディレクトリに紐づけることでアクセスできるようになります。これをマウントポイントと呼びます。</p>

<p>今回は以下のディレクトリをマウントポイントします。</p>

<pre><code>sudo mkdir /mnt/storage
</code></pre>

<p>つづいてマウントポイントを設定します。</p>

<pre><code>sudo mount -t ext4 /dev/sdb /mnt/storage
</code></pre>

<p>設定ができたか確認しましょう。</p>

<pre><code>df -h

Filesystem      Size  Used Avail Use% Mounted on
tmpfs           1.6G  2.5M  1.6G   1% /run
...
/dev/sda        440G   28K  417G   1% /mnt/storage
</code></pre>

<p>私の環境下ではマウントポイントのパーミションがrootとなっていたので、別のユーザーに変更しました。</p>

<pre><code>sudo chown ユーザー名:ユーザー名 /mnt/storage
</code></pre>

<p>以上でマウントポイントの作成は完了です。</p>

<p>ただし、現在の設定だと再起動のたびにマウントポイントの作成が必要となります。起動時に自動で作成してくれるよう、設定を行います。</p>

<p>まずはストレージのUUIDを調べましょう。<code>blkid</code>コマンドを実行します。</p>

<pre><code>sudo blkid /dev/sda

/dev/sda: UUID="*****-*****-******" BLOCK_SIZE="4096" TYPE="ext4"
</code></pre>

<p>UUIDが判明したら<code>/etc/fstab</code>に書き込んでいきましょう。
私は一番下の行に追加しました。</p>

<pre><code>sudo nano /etc/fstab

/swapfile                                 none            swap    sw              0       0
UUID=****-*****-***** /mnt/storage ext4 defaults 0 1
</code></pre>

<p>書き込みが完了したら <code>mount -a</code>コマンドで <code>/etc/fstab</code> からマウントポイントを作成します。</p>

<pre><code>sudo mount -a
</code></pre>

<p>特にエラーが出力されなければこれで完了です。再起動して実際にマウントされるか確認してみてください。</p>

<h2>参考サイト</h2>

<ul>
<li><a href="https://www2.yukawa.kyoto-u.ac.jp/~koudai.sugimoto/dokuwiki/doku.php?id=ubuntu:%E3%82%B9%E3%83%88%E3%83%AC%E3%83%BC%E3%82%B8%E3%81%AE%E3%83%95%E3%82%A9%E3%83%BC%E3%83%9E%E3%83%83%E3%83%88">ubuntu:ストレージのフォーマット [雑多な記録]</a></li>
</ul>

<div class="text-base md:text-sm text-gray-500 px-4 py-6">
カテゴリ: <a class="text-base md:text-sm text-green-500 no-underline hover:underline">Ubuntu</a>
</div>

<hr class="border-b-2 border-gray-400 mb-8 mx-4">

<div class="font-sans flex justify-between content-center px-4 pb-12">

<div class="text-left">
<span class="text-xs md:text-sm font-normal text-gray-600">&lt; 前の記事</span><br>
<p><a href="https://tyai-a.site/note/basic_commnad_mysql/" class="break-normal text-base md:text-sm text-green-500 font-bold no-underline hover:underline">MySQLの基礎的なコマンド集</a></p>
</div>
</div>


    </article>
  </div>

  </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<?php include($root.'/inc/footer.php'); ?>
</body>
</html>