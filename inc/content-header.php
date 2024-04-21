<?php if(isset($content_header_show) && $content_header_show) { ?>
<section class="border-b border-gray-200  dark:bg-gray-800 dark:border-gray-700">
	<div class="max-w-[85rem] w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 sm:py-24">
		<!-- Page Heading -->
		<header class="max-w-3xl mx-auto text-center">
			<h1 class="block text-2xl font-bold text-gray-800 sm:text-3xl dark:text-white"><?php echo $content_header_title; ?></h1>
			<p class="mt-2 text-md text-gray-800 dark:text-gray-400"><?php echo $content_header_summary; ?></p>
		</header>
		<!-- End Page Heading -->
	</div>
</section>
<?php } ?>