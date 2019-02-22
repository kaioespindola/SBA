<?php $this->assign('title', $leilao->name); ?>

<div class="container-pagina">

	<div class="pagina-leilao">

		<div class="nome">

			<center><h1><?= $leilao->name ?></h1>
			<h2><?= $leilao->oferta ?></h2>

			<P>
				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $configuracoes["site_url"] ?>leiloes/<?= $leilao->id ?>">
					<i class="fab fa-facebook"></i>
				</a>
				<a target="_blank"href="https://twitter.com/intent/tweet?text=<?= $leilao->name ?> <?= $configuracoes["site_url"] ?>leiloes/<?= $leilao->id ?>">
					<i class="fab fa-twitter"></i>
				</a>

				<a class="hide-on-med-and-up"href="whatsapp://send?text=<?= $leilao->name ?> <?= $configuracoes["site_url"] ?>leiloes/<?= $leilao->slug ?>">
					<i class="fab fa-whatsapp"></i>
				</a>

			</p></center>

		</div>

	</div>

</div>

<div class="escuro">

	<div class="container-noticia">

		<div class="pagina-leilao">

			<div class="folder">

				<?php $thumbnail = $leilao->picture; $link_thumb = explode("leiloes/", $thumbnail); ?>

				<?php if(!empty($leilao->picture)): ?>

					<a target="_blank" href="<?= $configuracoes["site_url"] ?>arquivos/leiloes/<?= $link_thumb[1] ?>">
						<img src="<?= $configuracoes["site_url"] ?>arquivos/leiloes/<?= $link_thumb[1] ?>">
					</a>

				<?php else: ?>

					<?php if(!empty($leilao->leiloeiras[0]->picture)): ?>

						<a target="_blank" href="<?= $configuracoes["site_url"] ?>arquivos/leiloes/<?= $link_thumb[1] ?>">
							<img src="https://sba1.com/<?= $leilao->leiloeiras[0]->picture ?>">
						</a>

					<?php else: ?>

						<a target="_blank" href="<?= $configuracoes["site_url"] ?>arquivos/leiloes/<?= $link_thumb[1] ?>">
							<img src="<?= $configuracoes["site_url"] ?>arquivos/leiloes/vazio.jpg">
						</a>

					<?php endif; ?>

				<?php endif; ?>

			</div>

			<div class="dados">

				<div class="dado">
					<h1><i class="fas fa-calendar"></i> Data</h1>
					<p><?= $leilao->date->format('d/m') ?></p>
				</div>

				<div class="dado">
					<h1><i class="fas fa-clock"></i> Horário</h1>
					<p><?= $leilao->date->format('H:i') ?></p>
				</div>

				<div class="local">
					<h1><i class="fas fa-location"></i> Local</h1>
					<p><?= $leilao->local ?></p>
				</div>

				<div class="dado">
					<h1>Transmissão</h1>
					<p>
						<?php if(!empty($leilao->canal_alternativo)): ?>
							<h5><?= $leilao->canal_alternativo ?></h5>
						<?php else: ?>
							<img style="height:80px;" src="https://sba1.com/img/canais/<?= $leilao->canai->picture ?>">
						<?php endif; ?>
					</p>
				</div>

				<div class="dado">
					<h1>Realização</h1>
					<p>
						<?php foreach($leilao->leiloeiras as $leiloeira): ?>
							<img style="height:80px;" src="https://sba1.com/<?= $leiloeira->picture ?>">
						<?php endforeach; ?>

					</p>
				</div>

			</div>

		</div>

	</div>

</div>

<?php if(!empty($leilao->link)): ?>

	<div class="container900">

		<div class="lotes">

			<h1>Lotes</h1>

			<?php
				$link = $leilao->link;
				$video_id = explode("playlist?list=", $link); // For videos like http://www.youtube.com/watch?v=...
				if (empty($video_id[1]))
					$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];
			?>

			<div class='embed-container'>
				<iframe src="https://www.youtube.com/embed/videoseries?list=<?= $video_id ?>&amp;ecver=2" frameborder='0' allowfullscreen></iframe>
			</div>

		</div>

	</div>

<?php endif; ?>

<?php if(!empty($leilao->grandescriatorios)): ?>

	<div class="container900">

		<div class="lotes">

			<h1>Grandes Criatórios</h1>

			<?php

				$link = $leilao->grandescriatorios;
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if (empty($video_id[1]))
					$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];

			?>

			<div class='embed-container'>
				<iframe src="https://www.youtube.com/embed/<?= $video_id ?>" frameborder='0' allowfullscreen></iframe>
			</div>

		</div>

	</div>

<?php endif; ?>


<?php if(!empty($leilao->grandescriatorios2)): ?>

	<div class="container900">

		<div class="lotes">

			<h1>Grandes Criatórios</h1>

			<?php

				$link = $leilao->grandescriatorios2;
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if (empty($video_id[1]))
					$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];

			?>

			<div class='embed-container'>
				<iframe src="https://www.youtube.com/embed/<?= $video_id ?>" frameborder='0' allowfullscreen></iframe>
			</div>

		</div>

	</div>

<?php endif; ?>


<?php if(!empty($leilao->vt)): ?>

	<div class="container900">

		<div class="lotes">

			<h1>VT</h1>

			<?php

				$link = $leilao->vt;
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if (empty($video_id[1]))
					$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];

			?>

			<div class='embed-container'>
				<iframe src="https://www.youtube.com/embed/<?= $video_id ?>" frameborder='0' allowfullscreen></iframe>
			</div>

		</div>

	</div>

<?php endif; ?>

<?php if(!empty($leilao->vt2)): ?>

	<div class="container900">

		<div class="lotes">

			<h1>VT</h1>

			<?php

				$link = $leilao->vt2;
				$video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
				if (empty($video_id[1]))
					$video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

				$video_id = explode("&", $video_id[1]); // Deleting any other params
				$video_id = $video_id[0];

			?>

			<div class='embed-container'>
				<iframe src="https://www.youtube.com/embed/<?= $video_id ?>" frameborder='0' allowfullscreen></iframe>
			</div>

		</div>

	</div>

<?php endif; ?>

<?php if(empty($leilao->catalogo)): ?>

<?php else: ?>

	<div class="container900">

		<div class="uteis">

			<h1>Úteis</h1>

			<h2>Catálogo</h2>
			<?php $cat = $leilao->catalogo; $link_cat = explode("leiloes/", $cat); ?>

			<a href="https://sba1.com/arquivos/leiloes/<?= $link_cat[1] ?>" target="_blank">
				<button>
					<i class="fa fa-download"></i> Baixar Catálogo PDF
				</button>
			</a>

		</div>

	</div>

<?php endif; ?>

<?= $this->element('propagandas/leaderboard'); ?>