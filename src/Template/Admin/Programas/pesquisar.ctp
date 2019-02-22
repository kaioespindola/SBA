<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-newspaper-o"></i> Pesquisar Programas
            <?= $this->Html->link(
                '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Programa"><i class="material-icons">add</i></div>', [
                'controller' => 'programas',
                'action' => 'adicionar' ],
                ['escape' => false]
              )
            ?>
        </h4>
    </div>

    <div class="col s12">

	    <?= $this->Form->create(null) ?>
	    <?= $this->Form->input('name', [
	        'id' => 'search',
	        'type' => 'search',
	        'label' => '',
	        'class' => 'col s9 m6 l4 white',
	        'placeholder' => 'Digite o nome do programa'
	    ]); ?>
	    <?= $this->Form->submit(__('search.jpg')) ?>
	    <?= $this->Form->end() ?>

    </div>

</div>

<div class="col l12 m12 s12">

	<div class="row">

		  <div class="chip">
		  	<?php if(sizeof($programas) === 1): ?>
		    Foi encontrado <?= sizeof($programas) ?> resultado
			<?php else: ?>
			Foram encontrados <?= sizeof($programas) ?> resultados
			<?php endif; ?>
		  </div>

	    <div class="col s12" style="margin-left:-20px;margin-top:15px;">

			<?php foreach($programas as $programa): ?>

	        <div class="col l3 m6 s12">
	          <div class="card">
	            <div class="card-image">
	              <img src="<?= $configuracoes['site_url'] ?><?= $programa->picture ?>">
	              <span class="card-title black-text"><b><?= $programa->name ?></b></span>
	            </div>
	            <?= $this->Form->postlink('<i class="material-icons">delete</i>', [
	            	'controller' => 'programas',
	            	'action' => 'deletar', $programa->id ], [
	            	'class' => 'btn-floating waves-effect waves-light red darken-4 right',
	            	'style' => 'margin-right:3%;margin-top:-8%;',
	            	'confirm' => 'Você tem certeza que deseja deletar este programa?',
	            	'escape' => false])
				?>
	            <?= $this->Html->link('<i class="material-icons">edit</i>', 
		        	['controller' => 'programas', 'action' => 'editar', $programa->id, $programa->slug],
			        ['class' => 'btn-floating btn-large waves-effect waves-light blue-grey darken-4 right','style' => 'margin-right:3%;margin-top:-8%;', 'escape' => false])
				?>
	            <div class="card-content">
	              <p>
	              <?= $programa->canai->name ?>
	              </p>
	            </div>
	          </div>
	        </div>

			<?php endforeach; ?>

	    </div>

	</div>

</div>