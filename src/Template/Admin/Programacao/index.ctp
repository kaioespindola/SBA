<style>
.editar {
    background-color:#eeeeee;
    color:#424242;
    padding:8px;
}
.remover {
    color:#424242;
    padding:8px;
}
</style>

<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-newspaper-o"></i> Programação
            <?= $this->Html->link(
                '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Horário"><i class="material-icons">add</i></div>', [
                'controller' => 'programacao',
                'action' => 'adicionar' ],
                ['escape' => false]
              )
            ?>
        </h4>
    </div>

</div>

<div class="col s12">
    <h1>Canal do Boi</h1>
</div>

<div class="col s12 m6 l4 lx4">

    <h5>Segunda a Sexta</h5>

      <table class="highlight white" style="border-radius:6px;">
        <thead>
          <tr>
              <th>Programa</th>
              <th></th>
              <th>Horários</th>
          </tr>
        </thead>

        <tbody>

            <?php foreach($semanacb as $item): ?>

                <tr>
                    <td>
                        <?= $item->name ?>
                        <br>
                        <?= $this->Html->link(
                        '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                        'controller' => 'programacao',
                        'action' => 'editar', $item->id ],
                            ['escape' => false]
                        )
                        ?>
                        <?= $this->Form->postlink(
                        '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                        'controller' => 'programacao',
                        'action' => 'deletar', $item->id ],
                            ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                        )
                        ?>
                    </td>
                    <td>
                    </td>
                    <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

      </table>

</div>

<div class="col s12 m6 l4 lx4">

<h5>Sábado</h5>

  <table class="highlight white" style="border-radius:6px;">
    <thead>
      <tr>
            <th>Programa</th>
            <th></th>
            <th>Horários</th>
      </tr>
    </thead>

    <tbody>

        <?php foreach($sabadocb as $item): ?>

            <tr>
                <td>
                    <?= $item->name ?>
                    <br>
                    <?= $this->Html->link(
                    '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                    'controller' => 'programacao',
                    'action' => 'editar', $item->id ],
                        ['escape' => false]
                    )
                    ?>
                    <?= $this->Form->postlink(
                    '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                    'controller' => 'programacao',
                    'action' => 'deletar', $item->id ],
                        ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                    )
                    ?>
                </td>
                <td>
                </td>
                <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>

  </table>

</div>

<div class="col s12 m6 l4 lx4">

<h5>Domingo</h5>

  <table class="highlight white" style="border-radius:6px;">
    <thead>
      <tr>
          <th>Programa</th>
          <th></th>
          <th>Horários</th>
      </tr>
    </thead>

    <tbody>

        <?php foreach($domingocb as $item): ?>

            <tr>
                <td>
                    <?= $item->name ?>
                    <br>
                    <?= $this->Html->link(
                    '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                    'controller' => 'programacao',
                    'action' => 'editar', $item->id ],
                        ['escape' => false]
                    )
                    ?>
                    <?= $this->Form->postlink(
                    '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                    'controller' => 'programacao',
                    'action' => 'deletar', $item->id ],
                        ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                    )
                    ?>
                </td>
                <td>
                </td>
                <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>

  </table>

</div>

<div class="col s12">

    <h1>Agro Canal</h2>

    <div class="col s12 m6 l4 lx4">

    <h5>Segunda a Sexta</h5>

    <table class="highlight white" style="border-radius:6px;">
        <thead>
        <tr>
            <th>Programa</th>
            <th></th>
            <th>Horários</th>
        </tr>
        </thead>

        <tbody>

            <?php foreach($semanaac as $item): ?>

                <tr>
                    <td>
                        <?= $item->name ?>
                        <br>
                        <?= $this->Html->link(
                        '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                        'controller' => 'programacao',
                        'action' => 'editar', $item->id ],
                            ['escape' => false]
                        )
                        ?>
                        <?= $this->Form->postlink(
                        '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                        'controller' => 'programacao',
                        'action' => 'deletar', $item->id ],
                            ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                        )
                        ?>
                    </td>
                    <td>
                    </td>
                    <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    </div>

    <div class="col s12 m6 l4 lx4">

    <h5>Sábado</h5>

    <table class="highlight white" style="border-radius:6px;">
        <thead>
        <tr>
            <th>Programa</th>
            <th></th>
            <th>Horários</th>
        </tr>
        </thead>

        <tbody>

            <?php foreach($sabadoac as $item): ?>

                <tr>
                    <td>
                        <?= $item->name ?>
                        <br>
                        <?= $this->Html->link(
                        '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                        'controller' => 'programacao',
                        'action' => 'editar', $item->id ],
                            ['escape' => false]
                        )
                        ?>
                        <?= $this->Form->postlink(
                        '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                        'controller' => 'programacao',
                        'action' => 'deletar', $item->id ],
                            ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                        )
                        ?>
                    </td>
                    <td>
                    </td>
                    <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    </div>

    <div class="col s12 m6 l4 lx4">

    <h5>Domingo</h5>

    <table class="highlight white" style="border-radius:6px;">
        <thead>
        <tr>
            <th>Programa</th>
            <th></th>
            <th>Horários</th>
        </tr>
        </thead>

        <tbody>

            <?php foreach($domingoac as $item): ?>

                <tr>
                    <td>
                        <?= $item->name ?>
                        <br>
                        <?= $this->Html->link(
                        '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                        'controller' => 'programacao',
                        'action' => 'editar', $item->id ],
                            ['escape' => false]
                        )
                        ?>
                        <?= $this->Form->postlink(
                        '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                        'controller' => 'programacao',
                        'action' => 'deletar', $item->id ],
                            ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                        )
                        ?>
                    </td>
                    <td>
                    </td>
                    <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
                </tr>

            <?php endforeach; ?>

        </tbody>

    </table>

    </div>

</div>


<!-- Cine+ -->

<div class="col s12">

<h1>Cine+</h2>

<div class="col s12 m6 l4 lx4">

<h5>Segunda a Sexta</h5>

<table class="highlight white" style="border-radius:6px;">
    <thead>
    <tr>
        <th>Programa</th>
        <th></th>
        <th>Horários</th>
    </tr>
    </thead>

    <tbody>

        <?php foreach($semanacm as $item): ?>

            <tr>
                <td>
                    <?= $item->name ?>
                    <br>
                    <?= $this->Html->link(
                    '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                    'controller' => 'programacao',
                    'action' => 'editar', $item->id ],
                        ['escape' => false]
                    )
                    ?>
                    <?= $this->Form->postlink(
                    '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                    'controller' => 'programacao',
                    'action' => 'deletar', $item->id ],
                        ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                    )
                    ?>
                </td>
                <td>
                </td>
                <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

</div>

<div class="col s12 m6 l4 lx4">

<h5>Sábado</h5>

<table class="highlight white" style="border-radius:6px;">
    <thead>
    <tr>
        <th>Programa</th>
        <th></th>
        <th>Horários</th>
    </tr>
    </thead>

    <tbody>

        <?php foreach($sabadocm as $item): ?>

            <tr>
                <td>
                    <?= $item->name ?>
                    <br>
                    <?= $this->Html->link(
                    '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                    'controller' => 'programacao',
                    'action' => 'editar', $item->id ],
                        ['escape' => false]
                    )
                    ?>
                    <?= $this->Form->postlink(
                    '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                    'controller' => 'programacao',
                    'action' => 'deletar', $item->id ],
                        ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                    )
                    ?>
                </td>
                <td>
                </td>
                <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

</div>

<div class="col s12 m6 l4 lx4">

<h5>Domingo</h5>

<table class="highlight white" style="border-radius:6px;">
    <thead>
    <tr>
        <th>Programa</th>
        <th></th>
        <th>Horários</th>
    </tr>
    </thead>

    <tbody>

        <?php foreach($domingocm as $item): ?>

            <tr>
                <td>
                    <?= $item->name ?>
                    <br>
                    <?= $this->Html->link(
                    '<span class="editar"><i class="fa fa-edit"></i> Editar</span>', [
                    'controller' => 'programacao',
                    'action' => 'editar', $item->id ],
                        ['escape' => false]
                    )
                    ?>
                    <?= $this->Form->postlink(
                    '<span class="remover"><i class="fa fa-remove"></i> Deletar</span>', [
                    'controller' => 'programacao',
                    'action' => 'deletar', $item->id ],
                        ['confirm' => 'Você tem certeza que deseja deletar este horário?', 'escape' => false]
                    )
                    ?>
                </td>
                <td>
                </td>
                <td><?= $item->time->format('H:i') ?> - <?= $item->termino->format('H:i') ?></td>
            </tr>

        <?php endforeach; ?>

    </tbody>

</table>

</div>

</div>