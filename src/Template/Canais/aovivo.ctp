<?php $this->assign('title', 'Ao Vivo'); ?>

<div class="escuro">

	<div class="container-pagina">

		<div class="titulo" style="padding-bottom: 1rem;">
			<h1>Canais ao Vivo</h1>
		</div>

	</div>

</div>

<?= $this->cell('Players'); ?>

<?= $this->element('Propagandas/leaderboard'); ?>