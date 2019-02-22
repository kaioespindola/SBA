<div class="row">

  <div class="col s12">
    <h4>
        <i class="fa fa-thumb-tack"></i> Notícias
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

    <?= $this->Form->create(null, ['action' => 'pesquisar','valueSources' => 'query']) ?>
    
    <?= $this->Form->control('q', [
      'label' => '',
      'class' => 'col s6 white',
      'placeholder' => 'Digite o nome da notícia']) ?>

    <?= $this->Form->submit(__('https://sba1.com/img/search.jpg')) ?>
    <?= $this->Form->end() ?>

  </div>

</div>

<div class="col s12 m12 l5" style="padding:0px;">

  <ul class="tabs">

    <li class="tab col s12 m3 l2">
      <a class="active blue-text" href="#noticias">Notícias</a>
    </li>

  </ul>

</div>

<div class="col l3">

      <a class='dropdown-button btn light-blue darken-4' href='#' data-activates='listaprogramas'>Filtrar por: <?= $programa->name ?> <i class="fa fa-angle-down"></i></a>

      <ul id='listaprogramas' class='dropdown-content'>

      	<li><a href="<?= $configuracoes["site_url"] ?>admin/noticias"> Todas as Notícias</a></li>

      	<?php foreach($programas as $programa): ?>
        	<li><a href="<?= $configuracoes["site_url"] ?>admin/noticias/programa/<?= $programa->slug ?>"><?= $programa->name ?></a></li>
      	<?php endforeach; ?>

      </ul>

</div>

<div id="noticias" class="col s12" style="padding:0px;">

  <?php if(count($noticias) === 0): ?>
  	<div class="chip" style="margin-top:15px;font-size:16px;">Este programa não possui nenhuma notícia</div>
  <?php else: ?>
  
  <table class="col s12 bordered highlight responsive-table white">

      <thead>
        <tr>
            <th></th>
            <th></th>
            <th class="center">Categorias</th>
            <th class="center">Programas</th>
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
                <?php if($noticia->destaque == 1): ?>
                  <i class="fa fa-star green-text tooltipped" data-position="top" data-delay="1" data-tooltip="Notícia Destaque" ></i>
                <?php endif; ?>
              <div style="margin-top:3px;margin-bottom:-10px;" class="grey-text">
               Postado em <b><?= $noticia->date ?></b><?php if($noticia->created != $noticia->modified): ?>
                  | Atualizado em <b><?= $noticia->modified ?></b>
                <?php endif; ?> | Pulicado por <?= $noticia->user->name ?>
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
            <td class="center">
              <?php foreach($noticia->categories as $category): ?>
                  <div class="chip" style="font-size:11px;">
                      <b><?= $category->name ?></b>
                  </div>
              <?php endforeach; ?>
            </td>
            <td class="center">
              <?php foreach($noticia->programas as $programa): ?>
                  <div class="chip" style="font-size:11px;">
                      <b><?= $programa->name ?></b>
                  </div>
              <?php endforeach; ?>
            </td>
          </tr>
          <?php endforeach ; ?>

      </tbody>

  </table>

  <?php endif; ?>

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

</div>

<br>