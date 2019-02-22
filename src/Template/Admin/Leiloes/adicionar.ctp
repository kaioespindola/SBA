<h4><i class="fa fa-gavel"></i> Adicionar Leilão</h4>

<div class="divider"></div>


	<?= $this->Form->create($leilao, [
		'enctype' => 'multipart/form-data'
		]) 
	?>

	<div class="col l3 m4 s12">

		<div class="card">

		    <div class="card-image">

                <div class="previa">
                    <img src="<?= $leilao->picture ?>" class="previa-imagem responsive-img" alt="">
                </div>

		    </div>

		    <div class="card-content" style="margin-top:-4%;">

		    	<div class="section">

	                <?= $this->Form->input('picture', [
	                    'id' => 'picture',
	                    'name' => 'picture',
	                    'label' => 'Atualizar Imagem',
	                    'placeholder' => 'Escolha uma imagem',
	                    'type' => 'text',
	                    'class' => 'previa',
	                ]) ?>

	                <a class="btn col s10 green darken-4 gerenciadordemidia" data-fancybox-type="iframe" href="<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=2&field_id=picture&relative_url=1&sort_by=date&fldr=leiloes/<?= date('Y'); ?>/<?= date('m'); ?>&akey=1ca6984gas62495k2asifcyqpf34863c"><i class="fa fa-file-o"></i> Escolher Arquivo</a>

	                <a class="btn col s2 grey darken-4 remover" href="">
	                    <i class="fas fa-trash"></i>
	                </a>

		    		<!-- Fim de upload de imagem de leilão -->

		    		<!-- Upload catalogo leilão -->

		    		<br><br>

		    		<h5 style="margin-bottom:20px;"><i class="fa fa-file-o"></i> Catálogo</h5>

		    		<?php if(empty($leilao->catalogo)): ?>
		    			<span class="btn col s12 z-depth-5 waves-effect" style="margin-bottom:20px;">
		    				<center>Nenhum Catálogo Enviado.</center>
		    			</span>
		    		<?php else: ?>
		    			<a href="<?= $configuracoes['site_url'] ?><?= $leilao->catalogo ?>" target="_blank">
			    			<span class="btn z-depth-5 waves-effect text-white">
		    					<center><i class="fa fa-download"></i> Download Catálogo</center>
			    			</span>
		    			</a>
		    		<?php endif; ?>

		    		<br><br>

	                <?= $this->Form->input('catalogo', [
	                    'id' => 'catalogo',
	                    'name' => 'catalogo',
	                    'label' => '',
	                    'placeholder' => 'Escolha uma imagem',
	                    'type' => 'text',
	                    'class' => 'col s8 previacatalogo',
	                ]) ?>

	                <a class="btn col s2 green darken-4 gerenciadordemidia" data-fancybox-type="iframe" href="<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=2&field_id=catalogo&relative_url=1&sort_by=date&fldr=leiloes/catalogos&akey=1ca6984gas62495k2asifcyqpf34863c"><i class="fa fa-file-o"></i></a>

	                <a class="btn col s2 grey darken-4 removercatalogo" href="">
	                    <i class="fas fa-trash"></i>
	                </a>

	                <br><br>

		    		<!-- Fim upload de catalogo leilão -->

		    	</div>

		    </div>

	    </div>

	</div>

	<div class="col s12 m8 l7 white">

		<div class="section">
		    <h5>Dados do Leilão</h5>
		</div>

		<div class="row">

			<div class="input-field col s12">

				<?= $this->Form->input('name', [
					'label' => 'Nome']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('oferta', [
					'label' => 'Oferta do Leilão']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('local', [
					'label' => 'Local']) 
				?>

			</div>

			<div class="input-field col s12">
				<label for="date">Data</label>
				<input type="text" name="date" value="<?= $leilao->date ?>" id="date" data-field="datetime" readonly>
				<div id="dtBox"></div>
			</div>

	        <div class="col s12">

	                <?= $this->Form->input('leiloeiras._ids', [
	                    'label' => 'Escolha as leiloeiras',
	                    'options' => $leiloeiras,
	                    'empty' => '(Nenhuma)',
	                    'type' => 'select',
	                    'multiple' => true
	                    ]);
	                ?>

	        </div>

			<div class="input-field col s12">
				<div style="font-size:12px;color:#BABABA;margin-top:-12px;"><b>Canal</b></div>
				<?= $this->Form->input('canal_id', [
					'label' => '',
					'type' => 'select',
					'empty' => '<option value="" disabled selected>Escolha um Canal</option>',
					'escape' => false]) 
				?>
			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('canal_alternativo', [
					'label' => 'Canal Alternativo (Adicione caso o canal não esteja na lista)']) 
				?>

			</div>
			
			<div class="input-field col s12">

				<?= $this->Form->input('endereco', [
					'label' => 'Endereço']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('link', [
					'label' => 'Lotes (Link Playlist Youtube)']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('vt', [
					'label' => 'VT (Link do Vídeo)']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('vt2', [
					'label' => 'VT2 (Link do Vídeo)']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('grandescriatorios', [
					'label' => 'Grands Criatórios (Link do vídeo)']) 
				?>

			</div>

			<div class="input-field col s12">

				<?= $this->Form->input('grandescriatorios2', [
					'label' => 'Caso leilão possua um segundo grande criatório (Link do vídeo)']) 
				?>

			</div>

			<?= $this->Form->button('<i class="material-icons left">add</i> Adicionar', [
			    'class' => 'col s12 waves-effect waves-light btn',
			    'style' => 'margin-bottom:30px;',
			    'type' => 'submit',
			    'escape' => false
			]) ?>

			<?= $this->Form->end() ?>

		</div>

	</div>

<script>
$('.previa').on('change keyup paste click', function(){
    var inputVal = $(this).val();
    $('.previa-imagem').attr('src', inputVal).fadeIn();
})

$('.remover').on('click', function(){
    var href = $(this).attr('href');
    $('.previa').val(href).trigger('change');
    return false;
})
</script>
                    
<script>
$(".gerenciadordemidia").fancybox({
    maxWidth    : 1200,
    maxHeight   : 700,
    fitToView   : true,
    width       : '90%',
    height      : '90%',
    autoSize    : false,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic'
});
</script>