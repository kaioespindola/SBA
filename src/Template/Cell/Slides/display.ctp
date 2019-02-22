<div class="row">

    <div class="col s12 titulo-widget hide-on-med-and-up" style="padding-left:10px;padding-right:10px;margin-bottom:2px;">

        <h1>Destaques</h1>
        <h5><a href="#">ver todas as notícias</a></h5>

    </div>

    <div class="col s12 m12 hide-on-large-only" style="margin-top:10px;padding-left:7px;padding-right:7px;" data-aos="fade-up" data-aos-duration="1200">

            <a href="<?= $configuracoes["site_url"] ?>noticias/<?= $slide1->slug ?>">

                <?php 

                    $thumbnail = $slide1->thumbnail;
                    $link_thumb = explode("noticias/", $thumbnail);

                ?>

                <div class="capa" style="background-image:url('<?= $configuracoes["site_url"] ?>arquivos/noticias/<?= $link_thumb[1] ?>');">

                    <div class="categoria">
                        <div class="nome">
                            <i><?= $slide1->categories[0]->name ?></i>
                        </div>
                    </div>

                    <div class="texto" data-aos="fade-up" data-aos-duration="1400">
                        <h5><?= $slide1->chapeu ?></h5>
                        <h2><?= $slide1->name ?></h2>
                    </div>

                </div>

            </a>

    </div>

    <div class="col l6 xl7 hide-on-med-and-down" style="padding-left:0px;padding-right:7px;" data-aos="fade-up" data-aos-duration="1200">

        <a href="<?= $configuracoes["site_url"] ?>noticias/<?= $slide1->slug ?>">

            <?php 

                $thumbnail = $slide1->thumbnail;
                $link_thumb = explode("noticias/", $thumbnail);

            ?>

            <div class="capa-destaque" style="background-image:url('<?= $configuracoes["site_url"] ?>arquivos/noticias/<?= $link_thumb[1] ?>');">

                <div class="categoria">
                    <div class="nome">
                        <i><?= $slide1->categories[0]->name ?></i>
                    </div>
                </div>

                <div class="texto" data-aos="fade-up" data-aos-duration="1400">
                    <h5><?= $slide1->chapeu ?></h5>
                    <h1><?= $slide1->name ?></h1>
                </div>

            </div>

        </a>

    </div>

    <div class="col s12 m12 l6 xl5" style="padding-left:7px;padding-right:7px;" data-aos="fade-up" data-aos-duration="1200">

        <?php foreach($slides1 as $slide): ?>

            <a href="<?= $configuracoes["site_url"] ?>noticias/<?= $slide->slug ?>">

                <?php 

                    $thumbnail = $slide->thumbnail;
                    $link_thumb = explode("noticias/", $thumbnail);

                ?>

                <div class="capa" style="background-image:url('<?= $configuracoes["site_url"] ?>thumbs2/noticias/<?= $link_thumb[1] ?>');">

                    <div class="categoria">
                        <div class="nome">
                        <i><?= $slide->categories[0]->name ?></i>
                        </div>
                    </div>

                    <div class="texto" data-aos="fade-up" data-aos-duration="1400">
                        <h5><?= $slide->chapeu ?></h5>
                        <h2><?= $slide->name ?></h2>
                    </div>

                </div>

            </a>

        <?php endforeach; ?>
        
    </div>

</div>