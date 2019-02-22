<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-thumb-tack"></i> Páginas
        <?= $this->Html->link(
            '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Página"><i class="material-icons">add</i></div>', [
            'controller' => 'paginas',
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
          <th>Titulo</th>
          <th><center>Visibilidade</center></th>
          <th></th>
          <th></th>
          <th>Modificado</th>
          <th>Criado</th>
      </tr>
    </thead>

<?php foreach ($paginas as $id => $nome): ?>
    <tr>
        <td></td>
        <td>

        <?= $this->Html->link($nome,['controller' => 'Paginas', 'action' => 'editar', $id], ['escape' => false]) ?>

          <br>

          <?= $this->Html->link(
            '<span style="background-color:#eeeeee;color:#424242;padding:8px;"><i class="fa fa-edit"></i> Editar</span>', [
            'controller' => 'Paginas',
            'action' => 'editar', $id ],
              ['escape' => false]
            )
          ?>
          <?= $this->Form->postlink(
            '<span style="color:#424242;padding:8px;"><i class="fa fa-remove"></i> Deletar</span>', [
            'controller' => 'Paginas',
            'action' => 'deletar', $id ],
              ['confirm' => 'Você tem certeza que deseja deletar este vídeo?', 'escape' => false]
            )
          ?>

        </td>
        <td><center>
          <?php foreach($detalhes as $detalhe): ?>
            <?php if($detalhe->id == $id): ?>

              <?php if($detalhe->visibilidade == 1): ?>
                <i class="fa fa-eye green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Público" ></i>
              <?php else: ?>
                <i class="fa fa-eye-slash grey-text tooltipped" data-position="top" data-delay="1" data-tooltip="Privado" ></i>
              <?php endif; ?>

            <?php endif; ?>
          <?php endforeach; ?>
        </center></td>
        <td><center>
            <?= $this->Html->link(
              '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="1" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
              'controller' => 'paginas',
              'action' => 'editar', $id],
                ['escape' => false]
              )
            ?>
            <?= $this->Form->postlink(
              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Deletar"><i class="fa fa-remove"></i></button>', [
              'controller' => 'paginas',
              'action' => 'deletar', $id ],
                ['confirm' => 'Você tem certeza que deseja deletar esta página?', 'escape' => false]
              )
            ?>
        </center></td>
        <td>
          <?php foreach($detalhes as $detalhe): ?>
            <?php if($detalhe->id == $id): ?>
              <?= $detalhe->user['name'] ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </td>
        <td>
          <?php foreach($detalhes as $detalhe): ?>
            <?php if($detalhe->id == $id): ?>
              <?= $detalhe->modified ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </td>
        <td>
          <?php foreach($detalhes as $detalhe): ?>
            <?php if($detalhe->id == $id): ?>
              <?= $detalhe->created ?>
            <?php endif; ?>
          <?php endforeach; ?>
        </td>
    </tr>
<?php endforeach; ?>

</table>