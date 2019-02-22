<h4><i class="fa fa-camera"></i> Editar Canal: <?= $canal->name ?></h4>

<div class="divider"></div>

<div class="row">

	<div class="col l5 m4 s12 white" style="padding-bottom:15px;">

		<div class="section">
		    <h5>Dados do Canal</h5>
		</div>

		<?= $this->Form->create($canal) ?>
		<?= $this->Form->input('descricao') ?>
		<?= $this->Form->input('player') ?>
		<?= $this->Form->input('m3u8') ?>
		<?= $this->Form->input('m3u82') ?>
		<?= $this->Form->button('<i class="material-icons left">add</i> Editar', [
		    'class' => 'col s12 waves-effect waves-light btn',
		    'type' => 'submit',
		    'escape' => false
		]) ?>
		<?= $this->Form->end() ?>
	
	</div>

</div>