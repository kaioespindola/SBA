<?php $this->assign('title', 'Dashboard'); ?>

<h4>Administração SBA</h4>

<br>

<div class="col s12 m6 l4 white z-depth-1" style="margin-right:25px;" data-aos="fade-up" data-aos-duration="1200">

	<p><i class="fa fa-newspaper-o"></i> Notícias Recentes</p>

	<div class="row" style="margin-top:-10px;">

		<table class="col s12 bordered highlight responsive-table white">

			<thead>

				<tr>

					<th></th>
					<th></th>

				</tr>

			</thead>

			<tbody>

			<?php foreach($noticias as $noticia): ?>
		      	<tr>
		          <td></td>
			        <td><?= $noticia->name ?>
		              <?php if($noticia->privacidade == 1): ?>
		                <i class="fa fa-globe green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Notícia Pública" ></i>
		              <?php else: ?>
		                <i class="fa fa-globe grey-text tooltipped" data-position="top" data-delay="1" data-tooltip="Notícia Privada" ></i>
		              <?php endif; ?>
		              <?php if($noticia->destaque == 1): ?>
		                <i class="fa fa-star green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Notícia Destaque" ></i>
		              <?php endif; ?>
		            <div style="margin-top:3px;margin-bottom:-10px;font-size:12px;" class="grey-text">
		              Criado em <b><?= $noticia->created->format('d') ?>/<?= $noticia->created->format('m') ?>/<?= $noticia->created->format('Y') ?>  às <?= $noticia->created->format('H') ?>h</b>
		              <?php if($noticia->created != $noticia->modified): ?> -
		                Atualizado em <b><?= $noticia->modified->format('d') ?>/<?= $noticia->modified->format('m') ?>/<?= $noticia->modified->format('Y') ?>  às <?= $noticia->modified->format('H') ?>h</b>
		              <?php endif; ?>
		            </div>
		          </td>
		      	</tr>
	      	<?php endforeach ; ?>
			</tbody>

		</table>

	<a href="<?= $configuracoes['site_url'] ?>admin/noticias">
		<button class="col btn-flat s12 waves-effect waves-green">VER TODAS</button>
	</a>

	</div>

</div>

<div class="col s12 m6 l4 white z-depth-1" style="margin-right:25px;" data-aos="fade-up" data-aos-duration="1200">

	<p><i class="fa fa-newspaper-o"></i> Leilões</p>

	<div class="row" style="margin-top:-10px;">

		<table class="col s12 bordered highlight responsive-table white">

			<thead>

				<tr>

					<th></th>
					<th></th>

				</tr>

			</thead>

			<tbody>

			<?php foreach($leiloes as $leilao): ?>
		      	<tr>
		          <td></td>
			        <td><?= $leilao->name ?>
		            <div style="margin-top:3px;margin-bottom:-10px;font-size:12px;" class="grey-text">
		            	<?= $leilao->date->format('d') ?>/<?= $leilao->date->format('m') ?>/<?= $leilao->date->format('Y') ?>  às <?= $leilao->date->format('H') ?>h
		            </div>
		          </td>
		      	</tr>
	      	<?php endforeach ; ?>
			</tbody>

		</table>

	<a href="<?= $configuracoes['site_url'] ?>admin/leiloes">
		<button class="col btn-flat s12 waves-effect waves-green">VER TODOS</button>
	</a>

	</div>

</div>