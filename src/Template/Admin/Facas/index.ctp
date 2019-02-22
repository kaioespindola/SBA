<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-list"></i> Facas
            <?= $this->Html->link(
                '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Facas"><i class="material-icons">add</i></div>', [
                'controller' => 'Facas',
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
      'placeholder' => 'Digite o nome da Faca']) ?>

    <?= $this->Form->submit(__('https://sba1.com/img/search.jpg')) ?>
    <?= $this->Form->end() ?>

	<thead>
	  <tr>
        <th></th>
        <th><i class="fa fa-user"></i> <?= $this->Paginator->sort('lote', 'Lote') ?></th>
        <th></th>
	  </tr>
	</thead>

    <tbody>

        <?php foreach($facas as $faca): ?>

            <tr data-aos="fade-left" data-aos-duration="1200">

                <td></td>
                
                <td><?= $faca->lote ?></td>

                <td>
                    <?= $this->Html->link(
                        '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="5" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
                        'controller' => 'Facas',
                        'action' => 'editar', $faca->id ],
                        ['escape' => false]
                    )
                    ?>
                    <?= $this->Form->postlink(
                        '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="5" data-tooltip="Deletar"><i class="fas fa-trash"></i></button>', [
                        'controller' => 'Facas',
                        'action' => 'deletar', $faca->id ],
                        ['confirm' => 'Você tem certeza que deseja deletar este leilão?', 'escape' => false]
                    )
                    ?>
                </td>

                <td><?= $faca->lote ?></td>

            </tr>

        <?php endforeach; ?>

    </tbody>