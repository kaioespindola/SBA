<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-list"></i> Arquivo de Leilões
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

    <?= $this->Form->create(null, ['action' => 'pesquisar','valueSources' => 'query']) ?>
    
    <?= $this->Form->control('q', [
      'label' => '',
      'class' => 'col s6 white',
      'placeholder' => 'Digite o nome do leilão']) ?>

    <?= $this->Form->submit(__('https://sba1.com/img/search.jpg')) ?>
    <?= $this->Form->end() ?>

	<thead>
	  <tr>
        <th><center><i class="fa fa-picture-o"></i> <?= $this->Paginator->sort('picture', 'Flyer') ?></center></th>
        <th><i class="fa fa-user"></i> <?= $this->Paginator->sort('name', 'Nome') ?></th>
        <th></th>
        <th><i class="fa fa-calendar"></i> <?= $this->Paginator->sort('date', 'Data') ?></th>
        <th><i class="fa fa-file-video-o"></i> <?= $this->Paginator->sort('canal_id' , 'Canal') ?></th>
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
                ['confirm' => 'Você tem certeza que deseja deletar esta Leiloeira?', 'escape' => false]
              )
            ?>
	    </td>
	    <td><?= $leilao->date ?></td>
	    <td><?= '<img src="' . $configuracoes['site_url'] . h($leilao->canai->transparente) . ' " width="60px;"/>' ?></td>
	    <td>

	    </td>


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