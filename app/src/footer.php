<footer class="bg-dark py-4">
	<div class="container">
		<div class="flex flex-wrap items-center justify-center md:justify-between gap-y-5">
			<div class="w-fit">
				<a href="https://www.aiims.com.au/this-is-us/" target="_blank"><?= renderImg('aiims.png', 'logo') ?></a>
			</div>

			<div class="w-full md:w-fit">
				<p class="capitalize text-gray-500 font-medium text-xs md:text-sm lg:text-base text-center">Copyright <?= date('Y') ?> <span class="px-2 md:px-3 lg:px-6">|</span> <?= $site ?> <span class="px-2 md:px-3 lg:px-6">|</span> All Rights Reserved</p>
			</div>
		</div>
	</div>
</footer>

<script type="text/javascript" src="./assets/js/app.js?v=0.3"></script>
</body>

</html>