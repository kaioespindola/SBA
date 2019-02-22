<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-thumb-tack"></i> Pesquisa de Notícias
        <?= $this->Html->link(
            '<div class="btn blue-grey darken-3 btn-floating tooltipped waves-effect waves-light" data-position="right" data-delay="5" data-tooltip="Adicionar Notícia"><i class="material-icons">add</i></div>', [
            'controller' => 'noticias',
            'action' => 'adicionar' ],
            ['escape' => false]
          )
        ?>
    </h4>
  </div>

  <div class="col s12">


    <?= $this->Form->create(null, ['valueSources' => 'query']); ?>

    <?= $this->Form->control('q', [
      'label' => '',
      'class' => 'col s6 white',
      'placeholder' => 'Digite o nome da notícia']) ?>

    <?= $this->Form->submit(__('https://sba1.com/img/search.jpg')) ?>
    <?= $this->Form->end() ?>

  </div>

  <div class="col s12" style="margin-bottom:10px;">

    <div class="chip">
      <?php if(sizeof($noticias) === 1): ?>
        Foi encontrado <?= sizeof($noticias) ?> resultado
      <?php else: ?>
        Foram encontrados <?= sizeof($noticias) ?> resultados
      <?php endif; ?>
    </div>

  </div>

</div>

<?php if(sizeof($noticias) === 0): ?>
<?php else: ?>
<table class="col s10 bordered highlight responsive-table white">

    <thead>
      <tr>
          <th></th>
          <th><?= $this->Paginator->sort('name', 'Notícias') ?></th>
      </tr>
    </thead>

    <tbody>

      <?php foreach($noticias as $noticia): ?>

        <tr>
          <td></td>
          <td><?= $this->Html->link($noticia->name,['controller' => 'Noticias', 'action' => 'editar', $noticia->id], ['escape' => false]) ?>
              <?php if($noticia->privacidade == 1): ?>
                <i class="fa fa-globe green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Notícia Pública" ></i>
              <?php else: ?>
                <i class="fa fa-globe grey-text tooltipped" data-position="top" data-delay="1" data-tooltip="Notícia Privada" ></i>
              <?php endif; ?>
            <div style="margin-top:3px;margin-bottom:-10px;" class="grey-text">
              Criado em <b><?= $noticia->created ?></b> |
              <?php if($noticia->created != $noticia->modified): ?>
                Atualizado em <b><?= $noticia->modified ?></b>
              <?php endif; ?>
            </div>
            <br>
              <?= $this->Html->link(
                '<span style="background-color:#eeeeee;color:#424242;padding:8px;"><i class="fa fa-edit"></i> Editar</span>', [
                'controller' => 'Noticias',
                'action' => 'editar', $noticia->id ],
                  ['escape' => false]
                )
              ?>
              <?= $this->Form->postlink(
                '<span style="color:#424242;padding:8px;"><i class="fa fa-remove"></i> Deletar</span>', [
                'controller' => 'Noticias',
                'action' => 'deletar', $noticia->id ],
                  ['confirm' => 'Você tem certeza que deseja deletar este vídeo?', 'escape' => false]
                )
              ?>
          </td>
        </tr>
        <?php endforeach ; ?>

    </tbody>

</table>

<ul class="col s10 pagination">

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
<?php endif; ?>

<br>