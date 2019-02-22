<?php $this->assign('title', $noticia->name); ?>

<div class="container-noticia">

	<div class="noticia">

		<center><h1><b><?= $noticia->name ?></b></h1></center>

		<?php if(!empty($noticia->fina)): ?>
			<center><h4><?= $noticia->fina ?></h4></center>
		<?php endif; ?>

		<center>
			<?php foreach($noticia->categories as $item): ?>
				<h2><a href="<?= $configuracoes["site_url"] ?>categorias/<?= $item->slug ?>"><?= $item->name ?></a></h2>
			<?php endforeach; ?>
		</center>

		<center>

			<div class="sociais" data-aos="fade-up" data-aos-duration="1400">

				<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">
					<i class="fab fa-facebook"></i>
				</a>
				<a target="_blank"href="https://twitter.com/intent/tweet?text=<?= $noticia->name ?> <?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">
					<i class="fab fa-twitter"></i>
				</a>

				<a class="hide-on-med-and-up"href="whatsapp://send?text=<?= $noticia->name ?> <?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">
					<i class="fab fa-whatsapp"></i>
				</a>

			</div>

		</center>

		<h5 data-aos="fade-up" data-aos-duration="1200">Por <?= $noticia->jornalista ?> - <?= $noticia->local ?><br>
		<i class="far fa-clock"></i> <?= $noticia->date->format('d') ?>/<?= $noticia->date->format('m') ?>/<?= $noticia->date->format('Y') ?>  às <?= $noticia->date->format('H') ?>h</h5>
		
		<?= $noticia->text ?>

		<h3>Últimas Notícias<h3>

		<div class="noticias">

			<?php foreach($ultimas_noticias as $noticia): ?>

				<a href="<?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">

					<div class="noticia">

						<?php $thumbnail = $noticia->thumbnail; $link_thumb = explode("noticias/", $thumbnail); ?>

						<div class="img" style="background-image:url('https://sba1.com/thumbs/noticias/<?= $link_thumb[1] ?>')"></div>

						<div class="dados">

							<h2><?= $noticia->chapeu ?></h2>
							<h1><?= $noticia->name ?></h1>
							<p><?= $noticia->date->format('d') ?>/<?= $noticia->date->format('m') ?>/<?= $noticia->date->format('Y') ?>  às <?= $noticia->date->format('H') ?>h</p>

						</div>
						
					</div>

				</a>

			<?php endforeach; ?>

		</div>

		<h3>Comentários<h3>

		<div id="disqus_thread"></div>

		<script>
			(function() {
				var d = document, s = d.createElement('script');
				
				s.src = '//canaldoboi.disqus.com/embed.js';
				
				s.setAttribute('data-timestamp', +new Date());
				(d.head || d.body).appendChild(s);
			})();
		</script>

	</div>

</div>