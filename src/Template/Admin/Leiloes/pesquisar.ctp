<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-list"></i> Pesquisa de Leiloes
            <?= $this->Html->link(
                '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Leilão"><i class="material-icons">add</i></div>', [
                'controller' => 'Leiloes',
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
        'placeholder' => 'Digite o nome do leilão'
    ]); ?>
    <?= $this->Form->submit(__('search.jpg')) ?>
    <?= $this->Form->end() ?>

	<thead>
	  <tr>
        <th><center><i class="fa fa-picture-o"></i> <?= $this->Paginator->sort('picture', 'Flyer') ?></center></th>
        <th><i class="fa fa-user"></i> <?= $this->Paginator->sort('name', 'Nome') ?></th>
        <th></th>
        <th><i class="fa fa-calendar"></i> <?= $this->Paginator->sort('date', 'Data') ?></th>
	  </tr>
	</thead>

	<tbody>

	<?php foreach($leiloes as $leilao): ?>

	  <tr>

	    <td>
            <center>
              	<?php if(!empty($leilao->picture)): ?>

                    <?php 

                        $thumbnail = $leilao->picture;
                        $link_thumb = explode("/leiloes/", $thumbnail);

                    ?>

                	<img src="<?= $configuracoes['site_url']?>thumbs/leiloes/<?= $link_thumb[1] ?>" width="40px;"/>
                <?php else: ?>
                	<?= '<img src="' . $configuracoes['site_url'] . 'arquivos/leiloes/vazio.jpg" width="40px;"/>' ?>
            	<?php endif; ?>

            </center>
	    </td>
	    <td><?= $leilao->name ?></td>
	    <td>
            <?= $this->Html->link(
            	'<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="5" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
            	'controller' => 'Leiloes',
            	'action' => 'editar', $leilao->id, $leilao->slug ],
                ['escape' => false]
              )
            ?>
            <?= $this->Form->postlink(
            	'<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="5" data-tooltip="Deletar"><i class="fas fa-trash"></i></button>', [
            	'controller' => 'Leiloes',
            	'action' => 'deletar', $leilao->id ],
                ['confirm' => 'Você tem certeza que deseja deletar este leilão?', 'escape' => false]
              )
            ?>
	    </td>
	    <td><?= $leilao->date ?></td>


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