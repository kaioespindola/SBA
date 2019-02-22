<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-tags"></i> Tag: <?= $tag->name ?>
    </h4>
  </div>

</div>

<div class="row">

    <div class="col s4 white" style="margin-right:15px;">

		<div class="divider"></div>
		<div class="section">
	    	<h5>Nome da Tag</h5>
	    	<p><?= $tag->name ?></p>
	  	</div>

	  	<div class="divider"></div>
		<div class="section">
	    	<h5>Slug</h5>
	    	<p><?= $tag->slug ?></p>
	  	</div>

	  	<div class="divider"></div>
		<div class="section">
	    	<h5>Número de Notícias</h5>
	    	<p><?= sizeof($tag->noticias) ?></p>
	  	</div>

	  	<div class="divider"></div>
		<div class="section">
	    	<h5>Descrição</h5>
	    	<p><?= $tag->description ?></p>
	  	</div>

    </div>

    <div class="col s6 white">

    <h5><i class="fa fa-tags"></i> Notícias com esta Tag</h5>

    <?php if(!empty($tag->noticias)): ?>

            <?= $this->Form->create(null) ?>
            <?= $this->Form->submit(__('search.jpg'), ['class' => 'right']) ?>
            <?= $this->Form->input('name', [
              'label' => '',
              'class' => 'col s4 white right',
              'placeholder' => 'Digite o nome da notícia']) ?>
            <?= $this->Form->end() ?>

        <table class="bordered responsive-table">

            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Slug</th>
                    <th>Data</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

            	<?php foreach($tag->noticias as $noticia): ?>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <?= $this->Html->link($noticia->name,['controller' => 'noticias', 'action' => 'detalhes', $noticia->id, $noticia->slug], ['escape' => false]) ?>
                        <br>
                    </td>
                    <td>
                        <?= $noticia->slug ?>
                    </td>
                    <td>
                    	<?= $noticia->date ?>
                    </td>
                    <td class="center">
        	            <?= $this->Html->link(
        	              '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="1" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
        	              'controller' => 'noticias',
        	              'action' => 'editar', $noticia->id ],
        	                ['escape' => false]
        	              )
        	            ?>
        	            <?= $this->Form->postlink(
        	              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Deletar"><i class="fa fa-remove"></i></button>', [
        	              'controller' => 'noticias',
        	              'action' => 'deletar', $noticia->id ],
        	                ['confirm' => 'Você tem certeza que deseja deletar esta Categoria?', 'escape' => false]
        	              )
        	            ?>
                    </td>
                </tr>
            	<?php endforeach; ?>

            </tbody>

        </table>

    <?php else: ?>
		<div style="padding:15px;">Esta tag não possui nenhuma notícia :(</div>
    <?php endif; ?>

    </div>

</div>