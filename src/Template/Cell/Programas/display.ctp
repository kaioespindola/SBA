<div class="escuro">

	<div class="container">

		<div class="carrousel">

			<div class="titulo">
				<h1>Programas</h1>
				<p>conheça os programas da casa</p>
			</div>

			<div class="swiper-container">

				<div class="swiper-wrapper">

					<?php foreach($programas as $programa): ?>

						<div class="swiper-slide">
							<a href="<?= $configuracoes["site_url"] ?>programas/<?= $programa->slug ?>">
								<img src="<?= $configuracoes["site_url"] ?><?= $programa->foto ?>">
							</a>
						</div>

					<?php endforeach; ?>

				</div>

				<div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
				<div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>

			</div>

		</div>

	</div>

</div>