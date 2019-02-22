<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-newspaper-o"></i> Programas
            <?= $this->Html->link(
                '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Programa"><i class="material-icons">add</i></div>', [
                'controller' => 'programas',
                'action' => 'adicionar' ],
                ['escape' => false]
              )
            ?>
        </h4>
    </div>

</div>

<div class="col l8 m12 s12">

	<div class="row">

	    <div id="canaldoboi" class="col s12" style="margin-left:-20px;margin-top:15px;">

			<?php foreach($programas as $programa): ?>

				<div class="col l4 m4 s12">
						<div class="card">
							<div class="card-image" style="max-height:170px;">
								<img src="<?= $configuracoes['site_url'] ?><?= $programa->picture ?>">
							</div>
						<?= $this->Html->link('<i class="material-icons">edit</i>', 
										['controller' => 'programas', 'action' => 'editar', $programa->id, $programa->slug],
										['class' => 'btn-floating btn-large waves-effect waves-light blue-grey darken-4 right','style' => 'margin-right:3%;margin-top:-8%;', 'escape' => false])
						?>
							<div class="card-content">
								<p><?= $programa->name ?></p>
							</div>
						</div>
				</div>

			<?php endforeach; ?>

	    </div>

	</div>

</div>