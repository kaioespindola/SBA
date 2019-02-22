<h4><i class="fa fa-clock"></i> Editar Horário</h4>

<div class="divider"></div>


	<?= $this->Form->create($programacao, [
		'enctype' => 'multipart/form-data'
		]) 
	?>

	<div id="dtBox"></div>

	<div class="col s12 m6 l4 xl4 white" style="margin-bottom:35px;">

		<div class="section">
		    <h5>Dados do Horário</h5>
		</div>

		<div class="row">

			<div class="input-field col s12">

				<?= $this->Form->input('name', [
					'label' => 'Nome']) 
				?>

			</div>

			<div class="input-field col s6">

				<label>Início</label>
				<input type="text" name="time" value="<?= $programacao->time->format('H:i') ?>" id="time" data-field="time">

			</div>

			<div class="input-field col s6">
				<label>Término</label>
				<input type="text" name="termino" value="<?= $programacao->termino->format('H:i') ?>" id="termino" data-field="time">
			</div>

			</div>

			<div class="input-field col s12" style="padding:0px;">

				<div style="font-size:12px;color:#BABABA;margin-top:-12px;"><b>Canal</b></div>

				<?= $this->Form->input('canal_id', [
					'label' => '',
					'type' => 'select',
					'empty' => '<option value="" disabled selected>Escolha um Canal</option>',
					'escape' => false])
				?>

			</div>

			<div class="input-field col s12" style="padding:0px;">

				<div style="font-size:12px;color:#BABABA;margin-top:-12px;"><b>Programa</b></div>

				<?= $this->Form->input('programa_id', [
					'label' => '',
					'type' => 'select',
					'empty' => '<option value="" disabled selected>Escolha um Programa</option>',
					'escape' => false])
				?>

			</div>

			<div class="input-field col s12" style="padding:0px;">

				<?= $this->Form->input('descricao', [
					'label' => 'Descrição']) 
				?>

			</div>

			<?= $this->Form->button('<i class="material-icons left">add</i> Editar', [
			    'class' => 'col s12 waves-effect waves-light btn',
			    'type' => 'submit',
			    'escape' => false
			]) ?>

			
			<?= $this->Form->end() ?>

		</div>

    </div>