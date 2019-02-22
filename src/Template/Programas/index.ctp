<div class="container-pagina">

	<div class="titulo">
		<h1>Programas</h1>
        <h5>Conheça os programas da casa</h5>
	</div>

	<div class="programas">

		<?php foreach($programas as $programa): ?>

			<div class="programa">
				<a href="<?= $configuracoes["site_url"] ?>programas/<?= $programa->slug ?>">
					<img src="<?= $configuracoes["site_url"] ?><?= $programa->foto ?>">
				</a>
			</div>
			
		<?php endforeach; ?>

	</div>

</div>