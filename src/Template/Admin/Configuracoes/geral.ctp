<h4><i class="fa fa-globe"></i> Editar Configurações</h4>

<div class="col l7 m12 s12 white" style="padding:15px;">

    <h5>Dados do Site</h5>

	<?= $this->Form->create($configuracao) ?>

		<?= $this->Form->input('site_name', [
			'label' => 'Nome do Site'
		]) ?>

		<?= $this->Form->input('site_details', [
			'label' => 'Descreva seu Site'
		]) ?>

		<?= $this->Form->input('site_url', [
			'label' => 'Url de seu Site'
		]) ?>

		<?= $this->Form->input('site_tags', [
			'label' => 'Tags que descreva seu site!'
		]) ?>

		<?= $this->Form->input('site_contact', [
			'label' => 'E-mail de Contato para o site',
			'type' => 'email']) ?>


		<?= $this->Form->button('<i class="material-icons left">edit</i> Editar', [
		    'class' => 'col s12 waves-effect waves-light btn',
		    'type' => 'submit',
		    'escape' => false
		]) ?>

	<?= $this->Form->end() ?>

</div>