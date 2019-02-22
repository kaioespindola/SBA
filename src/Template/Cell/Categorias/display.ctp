<?php foreach($categorias as $categoria): ?>

    <div class="categoria"><a href="<?= $configuracoes["site_url"] ?>categorias/<?= $categoria->slug ?>"><?= $categoria->name ?></a></div>

<?php endforeach; ?>
