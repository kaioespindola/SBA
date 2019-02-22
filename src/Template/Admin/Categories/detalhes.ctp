<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-tags"></i> Categoria: <?= $category->name ?>
    </h4>
  </div>

</div>

<div class="row">

    <div class="col s4 white" style="margin-right:15px;">

    <?php if(!empty($category->parent_category)): ?>
	  	<div class="divider"></div>
	  	<div class="section">
	  		<h5>Categoria Pai</h5>
	  		<p><?= $category->parent_category->name ?></p>
	  	</div>
	<?php endif; ?>

		<div class="divider"></div>
		<div class="section">
	    	<h5>Nome da Categoria</h5>
	    	<p><?= $category->name ?></p>
	  	</div>

	  	<div class="divider"></div>
		<div class="section">
	    	<h5>Slug</h5>
	    	<p><?= $category->slug ?></p>
	  	</div>

	  	<div class="divider"></div>
		<div class="section">
	    	<h5>Número de Notícias</h5>
	    	<p><?= sizeof($category->noticias) ?></p>
	  	</div>

	  	<div class="divider"></div>
		<div class="section">
	    	<h5>Descrição</h5>
	    	<p><?= $category->description ?></p>
	  	</div>

    </div>

</div>

<?= '<pre>',print_r($category),'</pre>' ?>

<?php foreach($descendants as $descendant): ?>
	<?php foreach($descendant->noticias as $noticia): ?>
		<?= $noticia->name ?> |
		<?= $noticia->created ?>
	<?php endforeach; ?>
<?php endforeach; ?>

<?php foreach($category->noticias as $noticia): ?>
<?= $noticia->name ?> |
<?= $noticia->created ?>
<?php endforeach; ?>