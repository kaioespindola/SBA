<style>

.canaldoboi-container {
    transition: 0.3s;
}

.canaldoboi-minimize .canaldoboi-position {
    background-color: white;
    border-radius: 2px;
    top: 10%;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.25);
    right: 20px;
    padding: 7px;
    position: fixed;
    width:220px;
    z-index: 1;
}

</style>

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

        <div class="col s12" style="height:20%;padding-left:0px;padding-right:0px;padding-bottom:8px;">

            <div class="<?= $canal->slug ?>-container">
                <div class="col s12" style="padding-left:0px;padding-right:0px;">
                    <div class="<?= $canal->slug ?>-position">
                        <div id="wrapvideo">
                            <div id="<?= $canal->slug ?>" style="margin:0px;padding:0px;"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

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

    playerInstance.on('error', function(evt){
         var element = document.getElementById("wrapvideo");
         if (evt.message === "Error loading player: No playable sources found") {
                        element.innerHTML = "<img class='responsive-img' src='https://sba1.com/img/canais/manutencao.jpg'>";
                }
                else {
                        element.innerHTML = "<img class='responsive-img' src='https://sba1.com/img/canais/manutencao.jpg'>";   
                }
    });

    playerInstance.on('setupError', function(evt){
         var element = document.getElementById("wrapvideo");
         if (evt.message === "No suitable players found and fallback disabled") {
                        element.innerHTML = "<img class='responsive-img' src='https://sba1.com/img/canais/manutencao.jpg'>";
                }
                else {
                        element.innerHTML = "<img class='responsive-img' src='https://sba1.com/img/canais/manutencao.jpg'>";    
                }
    });

<?php endforeach; ?>

    var playerContainerEl = document.querySelector('.canaldoboi-container');

    function getElementOffsetTop(el) {
      var boundingClientRect = el.getBoundingClientRect();
      var bodyEl = document.body;
      var docEl = document.documentElement;
      var scrollTop = window.pageYOffset || docEl.scrollTop || bodyEl.scrollTop;
      var clientTop = docEl.clientTop || bodyEl.clientTop || 0;
      return Math.round(boundingClientRect.top + scrollTop - clientTop);
    }


    function getScrollTop() {
      var docEl = document.documentElement;
      return (window.pageYOffset || docEl.scrollTop) - (docEl.clientTop || 0);
    }


    playerInstance.on('ready', function() {
            var config = playerInstance.getConfig();
            var utils = playerInstance.utils;
            var playerHeight = config.containerHeight;

            var playerOffsetTop = getElementOffsetTop(playerContainerEl);

            playerContainerEl.style.height = playerHeight + 'px';

            function onScrollViewHandler() {
                var minimize = getScrollTop() >= playerOffsetTop;

                utils.toggleClass(playerContainerEl, 'canaldoboi-minimize', minimize);
                playerInstance.resize();
            }

            var isScrollTimeout = false;

            window.onscroll = function() {
                if (isScrollTimeout) return;
                isScrollTimeout = true;
                onScrollViewHandler();
                setTimeout(function() {
                    isScrollTimeout = false;
                }, 80);

            };

        });

</script>