<h5>Tópicos</h5>

<?php foreach($tags as $tag): ?>
	<a href="<?= $configuracoes["site_url"] ?>tags/<?= $tag->slug ?>">
		<div class="chip white-text transparent"><?= $tag->name ?></div>
	</a>
<?php endforeach; ?>