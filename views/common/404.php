<?php require("{$_SERVER['DOCUMENT_ROOT']}/../views/common/header.php"); ?>
	<section class="error">
		<div class="bg bge">
			<h1>
				<?php echo $l['error.404.title']; ?>
			</h1>
			<p>
				<a href="/<?php echo $l['language']; ?>/"><?php echo $l['error.404.suggestion']; ?></a>
			</p>
		</div>
	</section>
<?php require("{$_SERVER['DOCUMENT_ROOT']}/../views/common/footer.php"); ?>