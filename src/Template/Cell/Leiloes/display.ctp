<div class="container">

    <div class="carrousel">

        <div class="titulo">
            <h1>Agenda de Leilões</h1>
            <p><a href="<?= $configuracoes["site_url"] ?>leiloes/">confira a agenda completa</a></p>
        </div>

        <div class="swiper-container">

            <div class="swiper-wrapper">

                <?php foreach($leiloes as $leilao): ?>

                    <div class="swiper-slide">

                        <a href="<?= $configuracoes["site_url"] ?>leiloes/<?= $leilao->id ?>/<?= $leilao->slug ?>">

                            <?php $thumbnail = $leilao->picture; $link_thumb = explode("leiloes/", $thumbnail); ?>

                            <?php if(!empty($leilao->picture)): ?>

                                <div class="leilao" style="background-image: url('https://sba1.com/arquivos/leiloes/<?= $link_thumb[1] ?>')">
                                    <h1><?= $leilao->name ?></h1>
                                </div>

                            <?php else: ?>

                                <?php if(!empty($leilao->leiloeiras[0]->picture)): ?>

                                    <div class="leilao" style="background-image: url('https://sba1.com/<?= $leilao->leiloeiras[0]->picture ?>')">
                                        <h1><?= $leilao->name ?></h1>
                                    </div>

                                <?php else: ?>

                                    <div class="leilao" style="background-image: url('<?= $configuracoes["site_url"] ?>arquivos/leiloes/vazio.jpg')">
                                        <h1><?= $leilao->name ?></h1>
                                    </div>

                                <?php endif; ?>

                            <?php endif; ?>
                            
                            <div class="data">
                                <?= $leilao->date->format('d/m');?> | <?= $leilao->date->format('H:i');?> | <?= $leilao->canai->name ?>
                            </div>

                            <div class="ver">
                                Ver Mais
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