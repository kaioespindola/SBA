<div class="container-pagina">

	<div class="titulo">
		<h1>Programação</h1>
        <h5>Configra nossa programação completa</h5>
	</div>

</div>


<div class="escuro">

	<div class="container">

		<div class="programacao">

			<?php foreach($canais as $canal): ?>

				<?php if($canal->name == 'Conexão BR'): ?>

				<?php else: ?>

				<h1><?= $canal->name ?></h1>

				<div class="dias">

					<div class="semana">

						<h3><i class="far fa-clock"></i> SEGUNDA A SEXTA</h3>

						<?php if($canal->name == 'Canal do Boi'): ?>

							<?php foreach($semanacb as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php if($canal->name == 'Agro Canal'): ?>

							<?php foreach($semanaac as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php if($canal->name == 'Cine+'): ?>

							<?php foreach($semanacm as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

					</div>

					<div class="sabado">

						<h3><i class="far fa-clock"></i> SÁBADO</h3>

						<?php if($canal->name == 'Canal do Boi'): ?>

							<?php foreach($sabadocb as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php if($canal->name == 'Agro Canal'): ?>

							<?php foreach($sabadoac as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php if($canal->name == 'Cine+'): ?>

							<?php foreach($sabadocm as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

					</div>

					<div class="domingo">

						<h3><i class="far fa-clock"></i> DOMINGO</h3>

						<?php if($canal->name == 'Canal do Boi'): ?>

							<?php foreach($domingocb as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php if($canal->name == 'Agro Canal'): ?>

							<?php foreach($domingoac as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

						<?php if($canal->name == 'Cine+'): ?>

							<?php foreach($domingocm as $item): ?>

								<div class="horario">
									<p><?= $item->time->format('H');?>h<?= $item->time->format('i');?> às <?= $item->termino->format('H');?>h<?= $item->termino->format('i');?></p>
									<h2><?= $item->name ?></h2>
								</div>

							<?php endforeach; ?>

						<?php endif; ?>

					</div>

				</div>

				<?php endif; ?>

			<?php endforeach; ?>

		</div>

	</div>

</div>

<?= $this->element('Propagandas/leaderboard') ?>