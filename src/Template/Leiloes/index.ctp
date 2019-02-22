<?php $this->assign('title', 'Agenda de Leilões'); ?>

<div class="container-pagina">

	<div class="titulo">
		<h1>Agenda de Leilões</h1>
	</div>

	<div class="leiloes">

		<?php foreach($leiloes as $leilao): ?>

			<div class="leilao">

				<a href="<?= $configuracoes["site_url"] ?>leiloes/<?= $leilao->id ?>/<?= $leilao->slug ?>">

					<?php $thumbnail = $leilao->picture; $link_thumb = explode("leiloes/", $thumbnail); ?>

					<?php if(!empty($leilao->picture)): ?>

						<div class="folder" style="background-image: url('https://sba1.com/arquivos/leiloes/<?= $link_thumb[1] ?>')">
							<h1><?= $leilao->name ?></h1>
						</div>

					<?php else: ?>

						<?php if(!empty($leilao->leiloeiras[0]->picture)): ?>

							<div class="folder" style="background-image: url('https://sba1.com/<?= $leilao->leiloeiras[0]->picture ?>')">
								<h1><?= $leilao->name ?></h1>
							</div>

						<?php else: ?>

							<div class="folder" style="background-image: url('<?= $configuracoes["site_url"] ?>arquivos/leiloes/vazio.jpg')">
								<h1><?= $leilao->name ?></h1>
							</div>

						<?php endif; ?>

					<?php endif; ?>

					<div class="data">
						<?= $leilao->date->format('d/m');?> | <?= $leilao->date->format('H:i');?> | <?= $leilao->canai->name ?>
					</div>

					<div class="ver">
						Ver Detalhes
					</div>

				</a>

			</div>

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