<h4><i class="fa fa-globe"></i> Editar Tag: <?= $tag->name ?></h4>

<div class="col l7 m12 s12 white">

	<div class="section">
	    <h5>Dados de <b><?= $tag->name ?></b></h5>
	</div>

    <?= $this->Form->create($tag) ?>

    <?= $this->Form->input('name', [
        'label' => 'Nome',
        'placeholder' => 'O nome é como aparece em seu site'
    ]) ?>

    <?= $this->Form->input('slug', [
        'label' => 'Slug',
        'placeholder' => 'O “slug” é uma versão amigável do URL',
    ]) ?>

    <?= $this->Form->input('description', [
        'label' => 'Descrição',
        'placeholder' => 'Descreva a categoria',
        'type' => 'textarea',
        'class' => 'materialize-textarea'
    ]) ?>

    <?= $this->Form->button('<i class="material-icons left">add</i> Editar Tag', [
        'class' => 'col s12 waves-effect waves-light btn',
        'type' => 'submit',
        'escape' => false
    ]) ?>

    <?= $this->Form->end() ?>

</div>