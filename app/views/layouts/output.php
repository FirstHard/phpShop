<!doctype html>
<html lang="ru">
	<head>
		<?= $head_content; ?>
	</head>
	<body>
		<div class="body-wrapper">
			<header class="page-title">
				<?= $nav_content; ?>
				<?= $header_content; ?>
			</header>
			<div class="container my-5">
				<div class="row">
					<?php
						$main_class = 'col-12';
						if ($asaid_content) {
							$main_class = 'col-12 col-lg-9';
					?>
					<div class="col-12 col-lg-3">
						<aside>
							<?= $asaid_content; ?>
						</aside>
					</div>
					<?php
						}
					?>
					<div class="<?= $main_class ?>">
						<?= $main_content; ?>
					</div>
				</div>
			</div>
			<footer class="bg-dark py-5 mt-5">
				<?= $footer_content; ?>
			</footer>
		</div>
		<script src="app/views/assets/js/bootstrap.bundle.min.js"></script>
	</body>
</html>