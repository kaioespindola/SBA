<div class="col s12" style="padding:0px;margin:0px;">

    <ul class="tabs-player" style="padding:0px;margin:0px;">

        <?php foreach($canais as $canal): ?>

            <li class="tab col s4">
                <a href="#<?= $canal->player ?>">
                    <img class="responsive-img" src="<?= $configuracoes["site_url"] ?><?= $canal->transparente ?>">
                </a>
            </li>

        <?php endforeach; ?>

    </ul>

</div>

<?php foreach($canais as $canal): ?>

    <div id="<?= $canal->player ?>" class="col s12 player" style="padding:0px;">

        <div id="<?= $canal->slug ?>" style="margin:0px;padding:0px;"></div>

        <h6>ao vivo</h6>
        <h3><?= $canal->name ?></h3>

        <div class="col s12 programacao">

            <div class="col s12 m12 l6 xl6 agora">

                <div class="col s12">

                    <?php if($canal->name == 'Canal do Boi'): ?>

                        <?php foreach($agoranocb as $item): ?>

                            <p class="aovivo"><?= $item->time->format('H');?>h<?= $item->time->format('i');?> | agora</p>
                            <p class="programa"><?= $item->name ?></p>

                        <?php endforeach; ?>

                    <?php endif; ?>

                    <?php if($canal->name == 'Agro Canal'): ?>

                        <?php foreach($agoranoac as $item): ?>

                            <p class="aovivo"><?= $item->time->format('H');?>h<?= $item->time->format('i');?> | agora</p>
                            <p class="programa"><?= $item->name ?></p>

                        <?php endforeach; ?>

                    <?php endif; ?>

                    <?php if($canal->name == 'Cine+'): ?>

                        <?php foreach($agoranocm as $item): ?>

                            <p class="aovivo"><?= $item->time->format('H');?>h<?= $item->time->format('i');?> | agora</p>
                            <p class="programa"><?= $item->name ?></p>

                        <?php endforeach; ?>

                    <?php endif; ?>

                </div>

            </div>

            <div class="col s12 m12 l6 xl6 depois">

                <?php if($canal->name == 'Canal do Boi'): ?>

                    <?php foreach($depoisnocb as $item): ?>

                        <div class="col s12">
                            <p class="aovivo"><?= $item->time->format('H');?>h<?= $item->time->format('i');?>  | depois</p>
                            <p class="programa"><?= $item->name ?></p>
                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>

                <?php if($canal->name == 'Agro Canal'): ?>

                    <?php foreach($depoisnoac as $item): ?>

                        <div class="col s12">
                            <p class="aovivo"><?= $item->time->format('H');?>h<?= $item->time->format('i');?>  | depois</p>
                            <p class="programa"><?= $item->name ?></p>
                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>

                <?php if($canal->name == 'Cine+'): ?>

                    <?php foreach($depoisnocm as $item): ?>

                        <div class="col s12">
                            <p class="aovivo"><?= $item->time->format('H');?>h<?= $item->time->format('i');?>  | depois</p>
                            <p class="programa"><?= $item->name ?></p>
                        </div>

                    <?php endforeach; ?>

                <?php endif; ?>

            </div>

            <div class="col s12 ver">

                <a href="<?= $configuracoes["site_url"] ?>programacao">
                    <i class="far fa-clock"></i> Ver grade completa
                </a>
                
            </div>

        </div>

    </div>

<?php endforeach; ?>

<script>

    <?php foreach($canais as $canal): ?>

    var playerInstance = jwplayer("<?= $canal->slug ?>");
    
    playerInstance.setup({
        file: "<?= $canal->m3u8 ?>",
        aspectratio: "4:3",
        image: "https://sba1.com/webroot/img/canais/<?= $canal->picture ?>",
        mediaid: "Dk85fAbY",
        events: {
            onTime: function(e){
                if(!e.viewable){
                    this.pause();
                }
            }
        }
    });

    <?php endforeach; ?>

</script>