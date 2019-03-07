<div class="container">

    <div class="destaques">

        <div class="titulo">

            <h1>Destaques</h1>
            <p>mais recentes</p>

        </div>

        <?php foreach($noticias as $noticia): ?>

            <a href="<?= $configuracoes['site_url'] ?>noticias/noticia/<?= $noticia->id ?>/<?= $noticia->slug ?>">
                <div class="destaque">
                    <div class="img" style="background-image:url('https://sba1.com/arquivos/<?= $noticia->thumbnail ?>')"></div>
                    <h1><?= $noticia->name ?></h1>
                </div>
            </a>

        <?php endforeach; ?>

    </div>

</div>