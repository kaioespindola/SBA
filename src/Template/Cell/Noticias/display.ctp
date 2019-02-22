<div class="veja-tambem">

    <div class="titulo">

        <h1>Notícias</h1>
        <p>últimas notícias</p>

    </div>

    <?php foreach($noticias as $noticia): ?>

        <div class="noticia">
            <a href="<?= $configuracoes['site_url'] ?>noticias/<?= $noticia->slug ?>">
                <div class="img" style="background-image:url('https://sba1.com/arquivos/<?= $noticia->thumbnail ?>');"></div>
                <h1><?= $noticia->name ?></h1>
            </a>
        </div>

    <?php endforeach; ?>

</div>