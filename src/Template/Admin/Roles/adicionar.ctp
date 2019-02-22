<h4><i class="fa fa-lock"></i> Adicionar Cargo</h4>

<div class="divider"></div>

<div class="row">

	<div class="col l5 m4 s12 white" style="padding:15px;">

		<div class="section">
		    <h5>Dados do Cargo</h5>
		</div>

		<?= $this->Form->create($role) ?>

		<div class="row">

			<div class="col s12">
				<?= $this->Form->input('name') ?>
			</div>

			<div class="col s12">
				<?= $this->Form->input('slug') ?>
			</div>

			<div class="col s12">
				<?= $this->Form->button('<i class="material-icons left">add</i> Adicionar', [
				    'class' => 'col s12 waves-effect waves-light btn',
				    'type' => 'submit',
				    'escape' => false
				]) ?>
			</div>

		</div>

	</div>

	<div class="col s2 white" style="padding:15px;">

	    <div class="section">
	    	<h5>Permissões</h5>
	    	<p>Qual controller tem acesso?</p>
	  	</div>

	  	<h5><i class="fa fa-users"></i> Usuários</h5>

	  	<!-- Checkbox Usuários -->
		<input type="hidden" name="perm_users" value="0">
		<?php if($role->perm_users == 1): ?>
		<input type="checkbox" id="perm_users" name="perm_users" value="1" checked="checked">
		<?php else: ?>
			<input type="checkbox" id="perm_users" name="perm_users" value="1">
		<?php endif; ?>
		<label for="perm_users" style="color:#000;font-size:15px;"><span></span>Usuários</label><br>

	  	<!-- Checkbox Roles -->
		<input type="hidden" name="perm_roles" value="0">
		<?php if($role->perm_roles == 1): ?>
		<input type="checkbox" id="perm_roles" name="perm_roles" value="1" checked="checked">
		<?php else: ?>
			<input type="checkbox" id="perm_roles" name="perm_roles" value="1">
		<?php endif; ?>
		<label for="perm_roles" style="color:#000;font-size:15px;"><span></span>Cargos e Permissões</label>

	</div>

	<?= $this->Form->end() ?>

</div>