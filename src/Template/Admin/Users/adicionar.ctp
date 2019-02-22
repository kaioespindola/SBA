<h4><i class="fa fa-user"></i> Adicionar Usuário</h4>

<div class="divider"></div>

	<?= $this->Form->create($user, [
		'enctype' => 'multipart/form-data'
		]) 
	?>

	<div class="col s12 m8 l7 white" style="padding:15px;">

		<div class="row">

			<div class="col l8" style="height:60px;">

				<div class="section">
				    <h5>Dados do Usuário</h5>
				</div>

			</div>

			<div class="col l4" style="padding-top:28px;height:60px;">

			  	<!-- Checkbox Usuário Ativo -->
				<input type="hidden" name="is_active" value="0">
				<?php if($user->is_active == 1): ?>
				<input type="checkbox" id="is_active" name="is_active" value="1" checked="checked">
				<?php else: ?>
					<input type="checkbox" id="is_active" name="is_active" value="1">
				<?php endif; ?>
				<label for="is_active" style="color:#000;font-size:19px;"><span></span>Usuário Ativo</label>

			</div>

		</div>

		<?= $this->Form->input('username', [
			'label' => 'Nome de Usuário']) ?>

		<?= $this->Form->input('name', [
			'label' => 'Nome']) ?>

		<?= $this->Form->input('password', [
			'label' => 'Senha']) ?>

		<?= $this->Form->input('role_id',[
			'type' => 'select',
			'class' => 'browser-default',
			'label' => 'Cargo']) ?>

			<br>

		<?= $this->Form->button('<i class="material-icons left">add</i> Adicionar', [
		    'class' => 'waves-effect waves-light btn col s12',
		    'type' => 'submit',
		    'escape' => false
		]) ?>
		<?= $this->Form->end() ?>

	</div>

