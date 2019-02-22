<h4>Editar <?= $faca->name ?></h4>

<div class="col s12 m8 l7 white" style="margin-bottom:35px;">

    <div class="section">
        <h5>Dados da Faca</h5>
    </div>

    <div class="row">

        <?= $this->Form->create($faca, [
            'enctype' => 'multipart/form-data'
            ]) 
        ?>

        <div class="input-field col s12">

            <?= $this->Form->input('name', [
                'label' => 'Nome']) 
            ?>

        </div>

        <div class="input-field col s12">

            <?= $this->Form->input('lote', [
                'label' => 'Lote']) 
            ?>

        </div>

        <div class="input-field col s12">

            <?= $this->Form->textarea('descricao', [
                'class'=>'ckeditor']) 
            ?>

        </div>

        <div class="input-field col s12">

            <?= $this->Form->input('video', [
                'label' => 'Vídeo']) 
            ?>

        </div>

        <?= $this->Form->button('<i class="material-icons left">add</i> Editar Faca', [
            'class' => 'col s12 waves-effect waves-light btn',
            'type' => 'submit',
            'escape' => false
        ]) ?>

        <?= $this->Form->end() ?>

    </div>

</div>