<div class="row">

    <div class="col s12">
        <h4>
            <i class="fa fa-suitcase"></i> Leiloeiras
            <?= $this->Html->link(
                '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Leiloeira"><i class="material-icons">add</i></div>', [
                'controller' => 'Leiloeiras',
                'action' => 'adicionar' ],
                ['escape' => false]
              )
            ?>
        </h4>
    </div>

</div>

<table class="bordered white">

    <?= $this->Form->create(null) ?>
    <?= $this->Form->input('name', [
        'id' => 'search',
        'type' => 'search',
        'label' => '',
        'class' => 'col s9 m6 l4 white',
        'placeholder' => 'Digite o nome da leiloeira'
    ]); ?>
    <?= $this->Form->submit(__('search.jpg')) ?>
    <?= $this->Form->end() ?>

	<thead>
	  <tr>
        <th><center><i class="fa fa-picture-o"></i> <?= $this->Paginator->sort('picture', 'Logo') ?></center></th>
        <th><i class="fa fa-user"></i> <?= $this->Paginator->sort('name', 'Nome') ?></th>
        <th></th>
        <th><i class="fa fa-envelope-o"></i> <?= $this->Paginator->sort('email', 'E-mail') ?></th>
        <th><i class="fa fa-phone-square"></i> <?= $this->Paginator->sort('telefone', 'Telefone') ?></th>
        <th><i class="fa fa-link"></i> <?= $this->Paginator->sort('link', 'Site') ?></th>
	  </tr>
	</thead>

	<tbody>

	<?php foreach($leiloeiras as $leiloeira): ?>

	  <tr>

	    <td>
            <center>
              	<?php if(!empty($leiloeira->picture)): ?>
                	<?= '<img src="' . $configuracoes['site_url'] . h($leiloeira['picture']) . ' " width="40px;"/>' ?>
                <?php else: ?>
                	<?= '<img src="' . $configuracoes['site_url'] . 'img/leiloeiras/vazio.jpg" width="40px;"/>' ?>
            	<?php endif; ?>

            </center>
	    </td>
	    <td><?= $leiloeira->name ?></td>
	    <td>
            <?= $this->Html->link(
            	'<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="5" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
            	'controller' => 'Leiloeiras',
            	'action' => 'editar', $leiloeira->id ],
                ['escape' => false]
              )
            ?>
            <?= $this->Form->postlink(
            	'<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="5" data-tooltip="Deletar"><i class="fa fa-remove"></i></button>', [
            	'controller' => 'Leiloeiras',
            	'action' => 'deletar', $leiloeira->id ],
                ['confirm' => 'Você tem certeza que deseja deletar esta Leiloeira?', 'escape' => false]
              )
            ?>
	    </td>
	    <td><?= $leiloeira->email ?></td>
	    <td><?= $leiloeira->telefone ?></td>
	    <td><a href="http://<?= $leiloeira->link ?>" target="_blank"><?= $leiloeira->link ?></a></td>

	  </tr>

	<?php endforeach; ?>

	</tbody>

</table>

<br>

<ul class="pagination">

    <?= $this->Paginator->prev(__('Anterior'),
    	['tag' => 'li', 'escape' => false],
    	null,
    	['tag' => 'li','class' => 'disabled','disabledTag' => 'a']);
	?>

    <?= $this->Paginator->numbers([
    	'separator' => '',
    	'currentTag' => 'a',
    	'currentClass' => 'active',
    	'tag' => 'li',
    	'first' => 1]);
    ?>

    <?= $this->Paginator->next(__('Próximo'),
    	['tag' => 'li','currentClass' => 'disabled'],
    	null,
    	['tag' => 'li','class' => 'disabled','disabledTag' => 'a']);
    ?>

</ul>

<br>