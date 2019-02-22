<div class="escuro">

        <div class="container">

            <div class="aovivo">

                <div class="player">

                    <div id="canaldoboiaovivo"></div>

                </div>

                <div class="canais">

                    <h3>CANAIS AO VIVO</h3>

                    <div id="seletor-canais"  class="seletor">

                        <div class="btn active" onclick="loadPlaylist(cbaovivo)">
                            <img src="http://sba1.com/img/canais/canaldoboi.jpg">
                        </div>
    
                        <div class="btn" onclick="loadPlaylist(agaovivo)">
                            <img src="http://sba1.com/img/canais/agrocanal.jpg">
                        </div>

                        <div class="btn" onclick="loadPlaylist(cxaovivo)">
                            <img src="http://sba1.com/img/canais/conexaobr.jpg">
                        </div>
    
                        <div class="btn" onclick="loadPlaylist(cmaovivo)">
                            <img src="http://sba1.com/img/canais/cinemais.jpg">
                        </div>

                    </div>

                    <div id="agora-cb">

                        <h1>Canal do Boi</h1>

                        <h3>PROGRAMAÇÃO</h3>

                        <div class="agora">
                            <p>agora - </p>
                            <h1>Bom Dia Produtor</h1>
                        </div>

                        <div class="depois">
                            <p>depois - 07h30</p>
                            <h1>Bom dia Produtor</h1>
                        </div>

                        <div class="depois">
                            <p>depois - 07h30</p>
                            <h1>Bom dia Produtor</h1>
                        </div>

                    </div>

                    <a href="#">
                        <div class="grade">GRADE COMPLEETA</div>
                    </a>

                </div>

            </div>

        </div>

    </div>


<script>
    
var playerInstance = jwplayer("canaldoboiaovivo");

playerInstance.setup({
    autostart: true,
    mute: true,
    controls: false,
    aspectratio: "16:9",
    stretching: "none",
    "playlist": [{
        file: "https://cvd2.cds.ebtcvd.net/hls/STCBsLNNEL.m3u8",
        image: "", 
        mediaid: "Dk85fAbY"
    },
    {
        file: "http://digilab.cds.ebtcvd.net/hls/STCBsLNEL2.m3u8",
        image: "https://sba1.com/webroot/img/canais/agrocanal.jpg", 
        mediaid: "Dk85fAbY"
    },
    {
        file: "http://189.86.89.117:8080/hls/livecx/index.m3u8",
        image: "https://sba1.com/webroot/img/canais/conexaobr.jpg", 
        mediaid: "Dk85fAbY"
    },
    {
        file: "https://cvd2.cds.ebtcvd.net/hls/STCBsLNEL3.m3u8",
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
    file: "https://cvd2.cds.ebtcvd.net/hls/STCBsLNNEL.m3u8",
    image: "https://sba1.com/webroot/img/canais/canaldoboi.jpg", 
    mediaid: "Dk85fAbY"
}];

var agaovivo = [{
    file: "https://cvd2.cds.ebtcvd.net/hls/STCBsLNEL2.m3u8",
    image: "https://sba1.com/webroot/img/canais/agrocanal.jpg", 
    mediaid: "Dk85fAbY"
}];

var cxaovivo = [{
    file: "http://189.86.89.117:8080/hls/livecx/index.m3u8",
    image: "https://sba1.com/webroot/img/canais/conexaobr.jpg", 
    mediaid: "Dk85fAbY"
}];

var cmaovivo = [{
    file: "http://189.86.89.117:8080/hls/livecm/index.m3u8",
    image: "https://sba1.com/webroot/img/canais/cinemais.jpg", 
    mediaid: "Dk85fAbY"
}];

function loadPlaylist(playerInstance) {

    jwplayer().load(playerInstance);

};
</script>