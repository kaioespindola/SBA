<div class="row">

  <div class="col s12">
      <h4>
          <i class="fa fa-lock"></i> Cargos
          <?= $this->Html->link(
              '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Cargo"><i class="material-icons">add</i></div>', [
              'controller' => 'roles',
              'action' => 'adicionar' ],
              ['escape' => false]
            )
          ?>
      </h4>
  </div>

  <div class="col s12">

    <table class="bordered white">

      <thead>

        <tr>
          <th></th>
          <th data-field="name">Nome</th>
          <th></th>
          <th data-field="price">Slug</th>
        </tr>

      </thead>

      <tbody>

  	    <?php foreach($roles as $role): ?>

    	    <tr>

            <td></td>

            <td>
              <?= $role->name ?>
            </td>

            <td>
              <?= $this->Html->link(
                '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="5" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
                'controller' => 'roles',
                'action' => 'editar', $role->id, $role->slug ],
                  ['escape' => false]
                )
              ?>
              <?= $this->Form->postlink(
                '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="5" data-tooltip="Deletar"><i class="fas fa-trash"></i></button>', [
                'controller' => 'roles',
                'action' => 'deletar', $role->id, $role->slug ],
                  ['confirm' => 'Você tem certeza que deseja deletar este cargo?', 'escape' => false]
                )
              ?>
            </td>
  	        <td><?= $role->slug ?></td>

    	    </tr>

    	  <?php endforeach ; ?>

      </tbody>

    </table>

  </div>

</div>

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