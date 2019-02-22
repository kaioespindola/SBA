<div class="escuro-player">

        <div class="container">

            <div class="aovivo">

                <div class="player">

                    <div id="canaldoboiaovivo"></div>

                </div>

                <div class="canais">

                    <h3>CANAIS AO VIVO</h3>

                    <div id="seletor-canais"  class="seletor">

                        <div class="btn active" onclick="loadPlaylist(cbaovivo);mudarProgramacao('cb')">
                            <img src="http://sba1.com/img/canais/canaldoboi.jpg">
                        </div>
    
                        <div class="btn" onclick="loadPlaylist(agaovivo);mudarProgramacao('ac')">
                            <img src="http://sba1.com/img/canais/agrocanal.jpg">
                        </div>

                        <div class="btn" onclick="loadPlaylist(cxaovivo);mudarProgramacao('cx')">
                            <img src="http://sba1.com/img/canais/conexaobr.jpg">
                        </div>
    
                        <div class="btn" onclick="loadPlaylist(cmaovivo);mudarProgramacao('cm')">
                            <img src="http://sba1.com/img/canais/cinemais.jpg">
                        </div>

                    </div>

                    <div id="programacaocb" style="display:grid;">

                        <h1>Canal do Boi</h1>

                        <h3>PROGRAMAÇÃO</h3>

                        <?php foreach($agoranocb as $item): ?>
                            <div class="agora">
                                <p>agora - <?= $item->time->format('H');?>h<?= $item->time->format('i');?></p>
                                <h1><?= $item->name ?></h1>
                            </div>
                        <?php endforeach; ?>

                        <?php foreach($depoisnocb as $item): ?>
                            <div class="depois">
                                <p>depois - <?= $item->time->format('H');?>h<?= $item->time->format('i');?></p>
                                <h1><?= $item->name ?></h1>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <div id="programacaoac" style="display:none;">

                        <h1>Agro Canal</h1>

                        <h3>PROGRAMAÇÃO</h3>

                        <?php foreach($agoranoac as $item): ?>
                            <div class="agora">
                                <p>agora - <?= $item->time->format('H');?>h<?= $item->time->format('i');?></p>
                                <h1><?= $item->name ?></h1>
                            </div>
                        <?php endforeach; ?>

                        <?php foreach($depoisnoac as $item): ?>
                            <div class="depois">
                                <p>depois - <?= $item->time->format('H');?>h<?= $item->time->format('i');?></p>
                                <h1><?= $item->name ?></h1>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <div id="programacaocx" style="display:none;">

                        <h1>Conexão BR</h1>

                    </div>

                    <div id="programacaocm" style="display:none;">

                        <h1>Cine+</h1>

                        <h3>PROGRAMAÇÃO</h3>

                        <?php foreach($agoranocm as $item): ?>
                            <div class="agora">
                                <p>agora - <?= $item->time->format('H');?>h<?= $item->time->format('i');?></p>
                                <h1><?= $item->name ?></h1>
                            </div>
                        <?php endforeach; ?>

                        <?php foreach($depoisnocm as $item): ?>
                            <div class="depois">
                                <p>depois - <?= $item->time->format('H');?>h<?= $item->time->format('i');?></p>
                                <h1><?= $item->name ?></h1>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <a href="https://sba1.com/programacao">
                        <div class="grade">GRADE COMPLETA</div>
                    </a>

                </div>

            </div>

        </div>

    </div>


<?php
	$req = file_get_contents('https://api.sba1.com/canais.json');
	$canais = json_decode($req);
?>

<script>

var playerInstance = jwplayer("canaldoboiaovivo");

playerInstance.setup({
    autostart: true,
    mute: true,
    controls: false,
    aspectratio: "16:9",
    stretching: "exactfit",
    "playlist": [{
        file: "<?= $canais[0]->m3u8 ?>",
        image: "", 
        mediaid: "Dk85fAbY"
    },
    {
        file: "<?= $canais[1]->m3u8 ?>",
        image: "https://sba1.com/webroot/img/canais/agrocanal.jpg", 
        mediaid: "Dk85fAbY"
    },
    {
        file: "<?= $canais[2]->m3u8 ?>",
        image: "https://sba1.com/webroot/img/canais/conexaobr.jpg", 
        mediaid: "Dk85fAbY"
    },
    {
        file: "<?= $canais[3]->m3u8 ?>",
        image: "https://sba1.com/webroot/img/canais/cinemais.jpg", 
        mediaid: "Dk85fAbY"
    }
]
});

setTimeout(function() { 
    jwplayer().pause();
    jwplayer().setMute(false);
    jwplayer().setControls(true);
},1000);

jwplayer().onTime(function(object) {
    if (object.position > object.duration - 1) {
        jwplayer().pause();
    }
});

playerInstance.on('setupError', function () {
    playerInstance.setup({
        file: "http://sba1.com/img/canais/transmissao.mp4",
        image:"//content.jwplatform.com/thumbs/7RtXk3vl-480.jpg",
        autostart: true,
    });
});

var cbaovivo = [{
    file: "<?= $canais[0]->m3u8 ?>",
    image: "https://sba1.com/webroot/img/canais/canaldoboi.jpg", 
    mediaid: "Dk85fAbY"
}];

var agaovivo = [{
    file: "<?= $canais[1]->m3u8 ?>",
    image: "https://sba1.com/webroot/img/canais/agrocanal.jpg", 
    mediaid: "Dk85fAbY"
}];

var cxaovivo = [{
    file: "<?= $canais[2]->m3u8 ?>",
    image: "https://sba1.com/webroot/img/canais/conexaobr.jpg", 
    mediaid: "Dk85fAbY"
}];

var cmaovivo = [{
    file: "<?= $canais[3]->m3u8 ?>",
    image: "https://sba1.com/webroot/img/canais/cinemais.jpg", 
    mediaid: "Dk85fAbY"
}];

function loadPlaylist(playerInstance) {

    jwplayer().load(playerInstance);

};
</script>