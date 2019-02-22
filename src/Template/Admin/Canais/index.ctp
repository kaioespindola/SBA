<h4><i class="fa fa-film"></i> Canais</h4>

<div class="col l8 m12 s12">

	<div class="row">

		<?php foreach($canais as $canal): ?>

		<div class="col l4 m4 s12">
		  	<div class="card">
			    <div class="card-image">
			      <img src="<?= $configuracoes["site_url"] ?><?= $canal->transparente ?>">
			    </div>
				<?= $this->Html->link('<i class="material-icons">edit</i>', 
				        ['controller' => 'canais', 'action' => 'editar', $canal->id, $canal->slug],
				        ['class' => 'btn-floating btn-large waves-effect waves-light blue-grey darken-4 right','style' => 'margin-right:3%;margin-top:-8%;', 'escape' => false])
				?>
			    <div class="card-content">
			      <p><?= $canal->name ?></p>
			    </div>
		    </div>
		</div>

		<?php endforeach; ?>

	</div>

</div>