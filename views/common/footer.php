	<section id="uoc">
		<a class="uoc" title="<?php echo $l['uoc.close']; ?>"></a>
		<h4>
			<?php echo $l['uoc.title']."\r\n"; ?>
		</h4>
		<div>
			<div>
				<?php echo $l['uoc.content']; ?>
			</div>
		</div>
	</section>
	<footer>
		<div>
			<h2>
				<a href="/<?php echo $l['language']; ?>/">LC moto</a>
			</h2>
			<a class="uoc"><?php echo $l['uoc.title']; ?></a>
			<p><?php echo $l['copy.right']; ?></p>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2.2.1/src/js.cookie.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
	<script src="/assets/js/script.js?v=<?php echo $ts; ?>"></script>
</body>
</html>