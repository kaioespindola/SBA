<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-archive"></i> Categorias
    </h4>
  </div>

</div>

<div class="row">

    <div class="col s4 white" style="margin-right:15px;">

        <h5><i class="fa fa-plus"></i> Adicionar Categoria</h5>

        <?= $this->Form->create() ?>

        <?= $this->Form->input('name', [
            'label' => 'Nome',
            'placeholder' => 'O nome é como aparece em seu site'
        ]) ?>

        <?= $this->Form->input('slug', [
            'label' => 'Slug',
            'placeholder' => 'O “slug” é uma versão amigável do URL'
        ]) ?>

        <?= $this->Form->input('parent_id', [
            'label' => 'Escolha a categoria pai',
            'options' => $parentCategories,
            'empty' => 'Nenhum',
            'class' => 'browser-default'
        ]) ?>

        <?= $this->Form->input('description', [
            'label' => 'Descrição',
            'placeholder' => 'Descreva a categoria',
            'type' => 'textarea',
            'class' => 'materialize-textarea'
        ]) ?>

        <?= $this->Form->button('<i class="material-icons left">add</i> Adicionar Categoria', [
            'class' => 'col s12 waves-effect waves-light btn',
            'type' => 'submit',
            'escape' => false
        ]) ?>

        <?= $this->Form->end() ?>

        <br><br>

    </div>

    <div class="col s6 white">

        <br>

        <table class="bordered responsive-table">

            <thead>
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th></th>
                </tr>
            </thead>

            <?php foreach($categorieslist as $index => $category):?>

            <tbody>    
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        <?= $category ?>
                        <br>
                    </td>
                    <td>
        	            <?= $this->Form->postlink(
        	              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Mover para cima"><i class="fa fa-arrow-up"></i></button>', [
        	              'controller' => 'categories',
        	              'action' => 'MoveUp', $index ],
        	                ['confirm' => 'Você tem certeza que deseja mover esta categoria para cima?', 'escape' => false]
        	              )
        	            ?>

        	            <?= $this->Form->postlink(
        	              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Mover para baixo"><i class="fa fa-arrow-down"></i></button>', [
        	              'controller' => 'categories',
        	              'action' => 'MoveDown', $index ],
        	                ['confirm' => 'Você tem certeza que deseja mover esta categoria para baixo?', 'escape' => false]
        	              )
        	            ?>
        	            <?= $this->Html->link(
        	              '<button class="btn-flat tooltipped waves-effect waves-green" data-position="top" data-delay="1" data-tooltip="Editar"><i class="fa fa-edit"></i></button>', [
        	              'controller' => 'categories',
        	              'action' => 'editar', $index ],
        	                ['escape' => false]
        	              )
        	            ?>
        	            <?= $this->Form->postlink(
        	              '<button class="btn-flat tooltipped waves-effect waves-red" data-position="top" data-delay="1" data-tooltip="Deletar"><i class="fa fa-remove"></i></button>', [
        	              'controller' => 'categories',
        	              'action' => 'deletar', $index ],
        	                ['confirm' => 'Você tem certeza que deseja deletar esta Categoria?', 'escape' => false]
        	              )
        	            ?>
                    </td>
                </tr>
            </tbody>

            <?php endforeach;?>

        </table>

    </div>

</div>