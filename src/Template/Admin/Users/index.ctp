<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-users"></i> Usuários
        <?= $this->Html->link(
            '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Usuário"><i class="material-icons">add</i></div>', [
            'controller' => 'users',
            'action' => 'adicionar' ],
            ['escape' => false]
          )
        ?>
    </h4>
  </div>

</div>

<table class="bordered responsive-table white">

    <thead>
      <tr>
          <th></th>
          <th><?= $this->Paginator->sort('name', 'Usuários') ?></th>
          <th></th>
          <th data-field="price">Cargo</th>
      </tr>
    </thead>

    <tbody>

    	<?php foreach($users as $user): ?>
      	<tr>
	        <td></td>

	        <td>
            <?= $user->name ?>
              <?php if($user->is_active == 1): ?>
                <i class="fa fa-check green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Usuário Ativado" ></i>
              <?php else: ?>
                <i class="fa fa-remove red-text tooltipped" data-position="top" data-delay="1" data-tooltip="Usuário Desativado" ></i>
              <?php endif; ?>
              <div style="margin-top:3px;margin-bottom:-10px;" class="grey-text">
                Criado em <b><?= $user->created->format('d') ?>/<?= $user->created->format('m') ?>/<?= $user->created->format('Y') ?>  às <?= $user->created->format('H') ?>h</b> |
                <?php if($user->created != $user->modified): ?>
                  Atualizado em <b><?= $user->modified ?></b>
                <?php endif; ?>
              </div>
          </td>

          <td><center>
            <?= $this->Html->link(
              '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="1" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
              'controller' => 'users',
              'action' => 'editar', $user->id, $user->slug ],
                ['escape' => false]
              )
            ?>
            <?= $this->Form->postlink(
              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Deletar"><i class="fas fa-trash"></i></button>', [
              'controller' => 'users',
              'action' => 'deletar', $user->id ],
                ['confirm' => 'Você tem certeza que deseja deletar este Usuário?', 'escape' => false]
              )
            ?>
            </center>
          </td>
	        <td><?= $user->role->name ?></td>
      	</tr>
      	<?php endforeach ; ?>

    </tbody>

</table>

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