<div id="pesquisar" class="modal" style="border-radius:20px;padding:10px;">

    <div class="row">

      <div class="col s1 grey-text" style="font-size:45px;margin-top:3px;">

        <i class="fa fa-search hide-on-small-only"></i>

      </div>

      <div class="col s10 black-text">

        <?= $this->Form->create(null, ['url' => ['controller' => 'Noticias', 'action' => 'pesquisar']]) ?>
        <?= $this->Form->input('q', [
            'id' => 'search',
            'type' => 'text',
            'label' => '',
            'class' => 'black-text',
            'placeholder' => 'digite o termo de sua busca',
            'style' => 'font-weight:600;font-size:2rem;color:#000;margin-top:5px;',
            'escape' => false
        ]); ?>
        <?= $this->Form->end() ?>

      </div>

    </div>

</div>