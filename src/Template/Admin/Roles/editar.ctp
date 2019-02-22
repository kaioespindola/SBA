<h4><i class="fa fa-lock"></i> Editar Cargo: <?= $role->name ?></h4>

<div class="divider"></div>

<div class="row">

	<div class="col l5 m4 s12 white" style="padding:15px;">

	    <h5>Dados do Cargo</h5>

		<?= $this->Form->create($role) ?>

		<div class="row">

			<div class="col s12">
				<?= $this->Form->input('name') ?>
			</div>

			<div class="col s12">
				<?= $this->Form->input('slug') ?>
			</div>

			<div class="col s12">
				<?= $this->Form->button('<i class="material-icons left">add</i> Editar', [
				    'class' => 'col s12 waves-effect waves-light btn',
				    'type' => 'submit',
				    'escape' => false
				]) ?>
			</div>

		</div>

	</div>

	<?= $this->Form->end() ?>

</div>