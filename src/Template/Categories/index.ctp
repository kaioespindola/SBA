<?php $this->assign('title', $categoria->name); ?>

<div class="container-pagina">

	<div class="titulo">
		<h1>Notícias sobre <?= $categoria->name ?></h1>
	</div>

	<div class="noticias">

		<?php foreach($noticias as $noticia): ?>

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

	<div class="paginacao">

		<ul class="pagination">

			<?= $this->Paginator->prev(__('<i class="fas fa-arrow-left"></i>'),
				['tag' => 'li', 'escape' => false],
				null,
				['tag' => 'li','class' => 'disabled','disabledTag' => 'a']);
			?>

			<?= $this->Paginator->numbers([
				'separator' => '',
				'currentTag' => 'a',
				'currentClass' => 'active',
				'tag' => 'li',
				'first' => 1]);
			?>

			<?= $this->Paginator->next(__('<i class="fas fa-arrow-right"></i>'),
				['tag' => 'li', 'escape' => false,'currentClass' => 'disabled'],
				null,
				['tag' => 'li','class' => 'disabled','disabledTag' => 'a']);
			?>

		</ul>

	</div>

</div>