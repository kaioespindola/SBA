<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-tags"></i> Tags
    </h4>
  </div>

</div>

<div class="row">

    <div class="col s4 white" style="margin-right:15px;">

        <h5><i class="fa fa-plus"></i> Adicionar Tag</h5>

        <?= $this->Form->create('tag', ['action' => 'adicionar']) ?>

        <?= $this->Form->input('name', [
            'label' => 'Nome',
            'placeholder' => 'O nome é como aparece em seu site'
        ]) ?>

        <?= $this->Form->input('slug', [
            'label' => 'Slug',
            'placeholder' => 'O “slug” é uma versão amigável do URL'
        ]) ?>


        <?= $this->Form->input('description', [
            'label' => 'Descrição',
            'placeholder' => 'Descreva a categoria',
            'type' => 'textarea',
            'class' => 'materialize-textarea'
        ]) ?>

        <?= $this->Form->button('<i class="material-icons left">add</i> Adicionar Tag', [
            'class' => 'col s12 waves-effect waves-light btn',
            'type' => 'submit',
            'escape' => false
        ]) ?>

        <?= $this->Form->end() ?>

        <br><br>

    </div>

    <div class="col s6 white">

            <?= $this->Form->create(null) ?>
            <?= $this->Form->submit(__('search.jpg'), ['class' => 'right']) ?>
            <?= $this->Form->input('name', [
              'label' => '',
              'class' => 'col s4 white right',
              'placeholder' => 'Digite o nome da tag']) ?>
            <?= $this->Form->end() ?>

        <?php if(sizeof($tags) === 0): ?>

          <div class="col s12" style="margin-bottom:10px;">

            <div class="chip col s12">
              <?php if(sizeof($tags) === 1): ?>
                Foi encontrado <?= sizeof($tags) ?> resultado
              <?php else: ?>
                Foram encontrados <?= sizeof($tags) ?> resultados
              <?php endif; ?>
            </div>

          </div>

        <?php else: ?>
        <table class="bordered responsive-table">

            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Slug</th>
                    <th class="center">Notícias</th>
                    <th></th>
                    <th>Descrição</th>
                </tr>
            </thead>

            <?php foreach($tags as $tag): ?>

            <tbody>    
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <?= $this->Html->link($tag->name,['controller' => 'tags', 'action' => 'detalhes', $tag->id, $tag->slug], ['escape' => false]) ?>
                        <br>
                    </td>
                    <td>
                        <?= $tag->slug ?>
                    </td>
                    <td class="center">
        	            <?= $this->Html->link(
        	              '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="1" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
        	              'controller' => 'tags',
        	              'action' => 'editar', $tag->id ],
        	                ['escape' => false]
        	              )
        	            ?>
        	            <?= $this->Form->postlink(
        	              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Deletar"><i class="fa fa-remove"></i></button>', [
        	              'controller' => 'tags',
        	              'action' => 'deletar', $tag->id ],
        	                ['confirm' => 'Você tem certeza que deseja deletar esta Categoria?', 'escape' => false]
        	              )
        	            ?>
                    </td>
                    <td>
                    	<?= $tag->description ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach;?>

        </table>
    <?php endif; ?>

    </div>

</div>