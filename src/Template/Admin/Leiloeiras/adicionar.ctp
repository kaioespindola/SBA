<h4><i class="fa fa-suitcase"></i> Adicionar Leiloeira</h4>

<div class="divider"></div>

	<?= $this->Form->create($leiloeira, [
		'enctype' => 'multipart/form-data'
		]) 
	?>

	<div class="col l3 m2 s12">

	  	<div class="card">

		    <div class="card-image">

	    		<img id="output" src="<?= $configuracoes['site_url'] ?>arquivos/leiloeiras/vazio.jpg">

		    </div>


		    <div class="card-content" style="margin-top:-4%;">

		    	<div class="section">

					<?= $this->Form->input('picture', [
						'label' => 'Foto']) 
					?>

		    		</div>

		    	</div>

		    </div>

	    </div>

	</div>

	<div class="col s8 m9 l7 white">

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

			<?= $this->Form->button('<i class="material-icons left">add</i> Adicionar', [
			    'class' => 'col s12 waves-effect waves-light btn',
			    'type' => 'submit',
			    'escape' => false
			]) ?>
			<?= $this->Form->end() ?>

		</div>
		
	</div>


<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>