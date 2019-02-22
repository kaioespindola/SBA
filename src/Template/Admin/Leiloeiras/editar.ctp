<h4><i class="fa fa-suitcase"></i> Editar Leiloeira</h4>

<div class="divider"></div>

	<?= $this->Form->create($leiloeira, [
		'enctype' => 'multipart/form-data'
		]) 
	?>

	<div class="col l3 m4 s12">

	  	<div class="card">

		    <div class="card-image">

		    	<?php if(empty($leiloeira->picture)): ?>
		    		<img id="output" src="<?= $configuracoes['site_url'] ?>arquivos/leiloeiras/vazio.jpg">
		    	<?php else: ?>
		        	<img id="output" src="<?= $configuracoes['site_url'] ?><?= $leiloeira->picture ?>">
		        <?php endif; ?>

		    </div>

		    <div class="card-content" style="margin-top:-4%;">

		    	<div class="section">

		    		<div class="envio-foto">

		    		<label for="file"><i class="fa fa-file-o"></i> Selecionar Imagem...</label>

		    		<?= $this->Form->input('picture_file', [
		    			'id' => 'file',
		    			'label' => false,
		    			'type' => 'file',
		    			'class' => 'campo-oculto',
		    			'onchange' => 'loadFile(event)'
		    		]) ?>

		    		</div>

		       		<?= '<h5>'. $leiloeira->name . '</h5>' ?>
    				<p><i class="fa fa-gavel"></i> <?= sizeof($leiloeira->leiloes) ?> Leilões</p>
    				<?php if(!empty($leiloeira->email)) {
    					echo '<p><i class="fa fa-envelope"></i> ' . $leiloeira->email . '</p>';
    				} ?>
    				<?php if(!empty($leiloeira->telefone)) {
    					echo '<p><i class="fa fa-phone"></i> ' . $leiloeira->telefone . '</p>';
    				} ?>
    				<?php if(!empty($leiloeira->link)) {
    					echo '<p><i class="fa fa-link"></i> ' . $leiloeira->link . '</p>';
    				} ?>

		    	</div>

		    </div>

	    </div>

	</div>

	<div class="col s12 m8 l7 white">

		<div class="section">
		    <h5>Dados da Leiloeira</h5>
		</div>
		
		<div id="dtBox"></div>

		<div class="row">

			<div class="input-field col s12">

				<?= $this->Form->input('name', [
					'label' => 'Nome']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('email', [
					'label' => 'E-mail']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('telefone', [
					'label' => 'Telefone',
					'id' => 'telefone']) 
				?>

			</div>


			<div class="input-field col s12">

				<?= $this->Form->input('link', [
					'label' => 'Site']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('cep', [
					'label' => 'CEP']) 
				?>

			</div>

			<div class="input-field col s9">

				<?= $this->Form->input('endereco', [
					'label' => 'Endereço']) 
				?>

			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('numero', [
					'label' => 'Número']) 
				?>

			</div>

			<div class="input-field col s7">

				<?= $this->Form->input('bairro', [
					'label' => 'Bairro']) 
				?>

			</div>

			<div class="input-field col s5">

				<?= $this->Form->input('complemento', [
					'label' => 'Complemento']) 
				?>

			</div>

			<div class="input-field col s9">

				<?= $this->Form->input('cidade', [
					'label' => 'Cidade']) 
				?>

			</div>

			<div class="input-field col s3">

				<?= $this->Form->input('estado', [
					'id' => 'estado',
					'label' => 'Estado']) 
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