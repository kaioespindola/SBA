<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-thumb-tack"></i> Pesquisa de Páginas
        <?= $this->Html->link(
            '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Página"><i class="material-icons">add</i></div>', [
            'controller' => 'paginas',
            'action' => 'adicionar' ],
            ['escape' => false]
          )
        ?>
    </h4>
  </div>

  <div class="col s12">

    <?php $statusopcoes = ['' => 'Status', 1 => 'Ativo', 0 => 'Desativado']; ?>
    <?php $statusvisibilidade = ['' => 'Visibilidade', 1 => 'Público', 0 => 'Privado']; ?>
    <?= $this->Form->create(null) ?>
    <?= $this->Form->input('name', [
      'label' => '',
      'class' => 'col s2 white',
      'placeholder' => 'Digite o nome da página']) ?>
    <?= $this->Form->input('status', [
      'label' => '',
      'type' => 'select',
      'class' => 'col s1 browser-default',
      'options' => $statusopcoes]) ?>
    <?= $this->Form->input('visibilidade', [
      'label' => '',
      'type' => 'select',
      'class' => 'col s1 browser-default',
      'options' => $statusvisibilidade]) ?>
    <?= $this->Form->submit(__('search.jpg')) ?>
    <?= $this->Form->end() ?>

  </div>

</div>

<table class="bordered responsive-table white">

    <thead>
      <tr>
          <th>TItulo</th>
          <th><center><?= $this->Paginator->sort('status', 'Status') ?></center></th>
          <th><center><?= $this->Paginator->sort('visibilidade', 'Visibilidade') ?></center></th>
          <th></th>
      </tr>
    </thead>

<?php foreach ($paginas as $pagina): ?>
  
    <tr>
        <td><?= $pagina->name ?></td>
        <td><center>
          <?php if($pagina->status == 1): ?>
            <i class="fa fa-paperclip green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Página Públicada" ></i>
          <?php else: ?>
            <i class="fa fa-paperclip grey-text tooltipped" data-position="top" data-delay="1" data-tooltip="Página Rascunho" ></i>
          <?php endif; ?>
        </center></td>
        <td><center>
          <?php if($pagina->visibilidade == 1): ?>
            <i class="fa fa-eye green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Público" ></i>
          <?php else: ?>
            <i class="fa fa-eye-slash grey-text tooltipped" data-position="top" data-delay="1" data-tooltip="Privado" ></i>
          <?php endif; ?>
        </center></td>        <td>
            <?= $this->Html->link(
              '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="1" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
              'controller' => 'paginas',
              'action' => 'editar', $pagina->id, $pagina->slug ],
                ['escape' => false]
              )
            ?>
            <?= $this->Form->postlink(
              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Deletar"><i class="fa fa-remove"></i></button>', [
              'controller' => 'paginas',
              'action' => 'deletar', $pagina->id ],
                ['confirm' => 'Você tem certeza que deseja deletar esta página?', 'escape' => false]
              )
            ?>
        </td>
    </tr>

<?php endforeach; ?>

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