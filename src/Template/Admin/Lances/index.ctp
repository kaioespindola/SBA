<div class="row">

    <div class="col s6">
        <h4>
            <i class="fa fa-list"></i> Lances
        </h4>
    </div>

</div>

<table class="bordered white">

    <?= $this->Form->create(null, ['action' => 'pesquisar','valueSources' => 'query']) ?>
    
    <?= $this->Form->control('q', [
      'label' => '',
      'class' => 'col s6 white',
      'placeholder' => 'Digite o nome do comprador']) ?>

    <?= $this->Form->submit(__('https://sba1.com/img/search.jpg')) ?>
    <?= $this->Form->end() ?>

	<thead>
	  <tr>
        <th></th>
        <th><i class="fa fa-user"></i> <?= $this->Paginator->sort('comprador', 'Comprador') ?></th>
        <th><?= $this->Paginator->sort('valor', 'Valor') ?></th>
        <th>Faca - Lote</th>
        <th>Telefone</th>
        <th>CPF</th>
	  </tr>
	</thead>

    <tbody>

        <?php foreach($lances as $lance): ?>

            <tr data-aos="fade-left" data-aos-duration="1200">

                <td></td>
                <td><?= $lance->comprador ?></td>
                <td><?= $lance->valor ?></td>
                <td><?= $lance->faca->name ?> - Lote #<?= $lance->faca->lote ?></td>
                <td><?= $lance->telefone ?></td>
                <td><?= $lance->cpf ?></td>

            </tr>

        <?php endforeach; ?>

    </tbody>