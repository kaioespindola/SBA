<?php $this->assign('title', $tag->name); ?>

<div class="container-sky">

	<div class="row">

	    <div class="col s12 titulo-pagina" style="padding-left:10px;padding-right:10px;padding-top:15px;">

	        <h1>Notícias sobre <?= $tag->name ?></h1>
	        <hr>

	    </div>

		<?php foreach($noticias as $noticia): ?>

			<div class="col s12 noticias" data-aos="fade-up" data-aos-duration="1400">

				<a href="<?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">

	                <?php 

	                    $thumbnail = $noticia->thumbnail;
	                    $link_thumb = explode("noticias/", $thumbnail);

	                ?>

					<div class="col s12 m6 l3 xl3 thumbnail" style="background-image:url(http://sba1.com/thumbs/noticias/<?= $link_thumb[1] ?>);">
					</div>

					<div class="col s12 m6 l9 xl9 dados hide-on-small-only" data-aos="fade-up" data-aos-duration="1600">
						<h5><?= $noticia->chapeu ?></h5>
						<h1><?= $noticia->name ?></h1>
						<?php if(!empty($noticia->fina)): ?>
							<h2><?= $noticia->fina ?></h2>
						<?php endif; ?>
						<h5><?= $noticia->date->format('d') ?>/<?= $noticia->date->format('m') ?>/<?= $noticia->date->format('Y') ?>  às <?= $noticia->date->format('H') ?>h</h5>
					</div>

					<div class="col s12 m6 l9 xl9 dados-mobile hide-on-med-and-up">
						<h5><?= $noticia->chapeu ?></h5>
						<h1><?= $noticia->name ?></h1>
						<h5><i class="far fa-clock"></i> <?= $noticia->date->format('d') ?>/<?= $noticia->date->format('m') ?>/<?= $noticia->date->format('Y') ?>  às <?= $noticia->date->format('H') ?>h</h5>
					</div>

				</a>

				<div class="col s12">
					<hr>
				</div>

			</div>

		<?php endforeach; ?>

	    <div class="col s12" style="padding:10px;">

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

</div>