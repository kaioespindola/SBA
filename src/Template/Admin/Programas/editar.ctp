<h4><i class="fa fa-newspaper-o"></i> Editar Programa</h4>

<div class="divider"></div>

	<?= $this->Form->create($programa, [
		'enctype' => 'multipart/form-data'
		]) 
	?>

	<div class="col l3 m4 s12">

		<div class="card">

		    <div class="card-image">

		    	<?php if(empty($programa->picture)): ?>
		    		<img id="output" src="<?= $configuracoes['site_url'] ?>img/programas/vazio.png">
		    	<?php else: ?>
		        	<img id="output" src="<?= $configuracoes['site_url'] ?><?= $programa->picture ?>">
		        <?php endif; ?>

		    </div>

		    <div class="card-content" style="margin-top:-4%;">

		    	<div class="section">

		    		<div class="envio-foto">

		    		<!-- Upload Imagem Leilão -->

			    		<label for="file" style="font-size:11px;"><i class="fa fa-file-o"></i>
			    			<?php if(!empty($programa->picture)): ?>
			    			Alterar Imagem
			    			<?php else: ?>
			    			Selecionar Imagem...
			    			<?php endif; ?>
			    		</label>

			    		<?= $this->Form->input('picture_file', [
			    			'id' => 'file',
			    			'label' => false,
			    			'type' => 'file',
			    			'class' => 'campo-oculto',
			    			'onchange' => 'loadFile(event)'
			    		]) ?>

		    		</div>

		    		<!-- Fim de upload de imagem de leilão -->

		    	</div>

	    </div>

		    </div>

		    <div class="col s12 white z-depth-1">

                <div class="col s12">
                    <p><i class="fa fa-eye"></i> Visibilidade</p>
                </div>

                <?= $this->Form->input('status', [
                  'label' => '',
                  'type' => 'select',
                  'options' => [1 => 'Público', 0 => 'Privado']
                ]) ?>

		    </div>

		    <div class="col s12 white z-depth-1" style="margin-top:15px;">

			    <div class="col s12">

			    	<p><i class="fa fa-picture"></i> Foto do Programa</p>

			    </div>

			    	<div class="section">

				    	<div class="envio-foto">

				    		<label for="fotoprograma" style="font-size:11px;"><i class="fa fa-file-o"></i> 
				    			<?php if(!empty($programa->foto)): ?>
				    			Alterar Imagem
				    			<?php else: ?>
				    			Selecionar Imagem...
				    			<?php endif; ?>
				    		</label>

				    		<?= $this->Form->input('foto_file', [
				    			'id' => 'fotoprograma',
				    			'label' => false,
				    			'type' => 'file',
				    			'class' => 'campo-oculto',
				    			'onchange' => 'loadFile(event)'
				    		]) ?>

			    		</div>

		    		</div>

		    </div>

				<?= $this->Form->button('<i class="material-icons left">add</i> Salvar', [
				    'class' => 'col s12 waves-effect waves-light btn',
				    'style' => 'margin-top:4%;',
				    'type' => 'submit',
				    'escape' => false
				]) ?>


		</div>

	<div class="col s12 m8 l7 white">

		<div class="section">
		    <h5>Dados do Programa</h5>
		</div>

		<div class="row">

			<div class="input-field col s12">

				<?= $this->Form->input('name', [
					'label' => 'Nome do Programa']) 
				?>

			</div>

			<div class="input-field col s12">
				<?= $this->Form->input('contato', [
					'type' => 'email',
					'label' => 'Contato']) 
				?>
			</div>

			<div class="input-field col s12">
				<?= $this->Form->input('apresentadores', [
					'label' => 'Nome dos apresentadores do programa'])
				?>
			</div>

			<div class="input-field col s12">
				<?= $this->Form->input('dias', [
					'label' => 'Dias da semana que o programa entra no ar'])
				?>
			</div>

			<div class="input-field col s12">
		        <?= $this->Form->textarea('horarios', [
		            'label' => 'Horários do programa',
		            'placeholder' => '',
		            'type' => 'textarea',
		            'class'=>'ckeditor'
		        ]) ?>
	        </div>

			<div id="dtBox"></div>

			<div class="input-field col s12">
				<div style="font-size:12px;color:#BABABA;margin-top:-12px;"><b>Canal</b></div>
				<?= $this->Form->input('canal_id', [
					'label' => '',
					'type' => 'select'])
				?>
			</div>

		    <div class="col s12" style="margin-right:15px;margin-top:5px;margin-bottom:5px;">

		    	<label>Detalhes do Programa</label>
		        <?= $this->Form->textarea('text',[
		        'class'=>'ckeditor'
		        ]) ?>

			</div>
			
			<div class="input-field col s12">

				<?= $this->Form->input('integra', [
					'label' => 'Playlist programas na integra']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('playlist2titulo', [
					'label' => 'Título segunda playlist']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('playlist2', [
					'label' => 'Segunda playlist']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('playlist3titulo', [
					'label' => 'Título terceira playlist']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('playlist3', [
					'label' => 'Terceira playlist']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('playlist4titulo', [
					'label' => 'Título quarta playlist']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('playlist4', [
					'label' => 'Quarta playlist']) 
				?>

			</div>
			
		</div>

	</div>

	<br>

	<?= $this->Form->end() ?>