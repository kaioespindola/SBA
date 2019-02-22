<div class="container">

    <div class="carrousel">

        <div class="titulo">
            <h1>Matérias</h1>
            <p><a href="<?= $configuracoes["site_url"] ?>categorias/materias">ver todas</a></p>
        </div>

        <div class="swiper-container">

            <div class="swiper-wrapper">

                <?php foreach($noticias as $noticia): ?>

                    <div class="swiper-slide">
                        <a href="<?= $configuracoes["site_url"] ?>noticias/<?= $noticia->slug ?>">
                            <div class="item">
                                <?php $thumbnail = $noticia->thumbnail; $link_thumb = explode("noticias/", $thumbnail); ?>
                                <div class="img" style="background-image:url('https://sba1.com/thumbs/noticias/<?= $link_thumb[1] ?>');"></div>
                                <h1><?= $noticia->name ?></h1>
                            </div>
                        </a>
                    </div>

                <?php endforeach; ?>

            </div>

            <div class="swiper-button-next"><i class="fas fa-angle-right"></i></div>
            <div class="swiper-button-prev"><i class="fas fa-angle-left"></i></div>

        </div>

    </div>

</div>