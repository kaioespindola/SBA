<?php $this->assign('title', 'Leilão de Facas'); ?>

<style>
.espaco-faca {
  padding:16px;
}
.caixa-faca {
    background-color:#fff;
    border-radius:7px;
}
.faca-foto {
    padding:5px;
    -webkit-box-shadow: 10px 0px 80px -9px rgba(0,0,0,0.59);
    -moz-box-shadow: 10px 0px 80px -9px rgba(0,0,0,0.59);
    box-shadow: 10px 0px 80px -9px rgba(0,0,0,0.59);
}
input {
  all: unset;
}
#cutelaria {
    margin-top:20px;

}
.thumbnail {
    background-size:50% 50%;
}
.thumbnail .texto {
    position: absolute;
    text-align:center;
    top: 0;
    bottom: 0;
    right: 0;
    left: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity ease-in-out 500ms;
    background: rgba(0, 0, 0, 0.4);
    opacity:1;
}
.thumbnail .texto:hover {
    opacity:0.5;
}
.videoWrapper {
    position: relative;
    padding-bottom: 56.25%; /* 16:9 */
    padding-top: 25px;
    height: 0;
}
.videoWrapper iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.dados h1{
    font-size:17px;
}
</style>

<div class="col s12 capa-programa" style="background-image:url('<?= $configuracoes["site_url"] ?>img/bg-cutelaria.jpg');">

    <div class="container-sky" style="margin-top:0px;">

        <center>
            <img class="responsive-img" style="max-height:350px" src="img/facas-logo.png">
        </center>

        <center>

            <div id="cutelaria"></div>

            <br><br>

            <script>

                var playerInstance = jwplayer("cutelaria");
                playerInstance.setup({
                    file: "http://sba1.com/img/CUTELARIA.mp4",
                    aspectratio: "16:9",
                    image: "http://sba1.com/img/facas-thumb.png",
                    mediaid: "Dk85fAbY",
                    events: {
                        onTime: function(e){
                            if(!e.viewable){
                                this.pause();
                            }
                        }
                    }
                });

            </script>

        </center>

    </div>

</div>

<div class="container-corpo">

    <div class="row">

        <div class="col s12 titulo-widget" style="padding-left:10px;padding-right:10px;">

            <h1>Lotes</h1>

        </div>

    </div>

</div>

<?php
    $api_key = 'AIzaSyD8BG0exUZxMcnOKpOeRHBxr0iUN4vxGcM';
    $playlist_id =  'PL1e8yULH4Lc51z9HlYy2k9FI2Y3_fKJaK';
    $api_url = 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet&maxResults=4&playlistId='. $playlist_id . '&key=' . $api_key;
        
    $playlist = json_decode(file_get_contents($api_url));
?>

<div class="col s12" style="background-color:#ebebeb;">

    <div class="container-corpo">

        <div class="row" style="padding:0px;">

            <div class="col s12" style="padding-left:0px;padding-right:0px;">

                <?php foreach($playlist->items as $item): ?>

                    <div class="col s12 m6 l3 xl3 noticias-home">

                        <a class="modal-trigger" href="#lote<?= $item->snippet->resourceId->videoId ?>">

                            <div class="col s12 thumbnail" style="position: relative;background-image:url(<?= $item->snippet->thumbnails->high->url ?>);">
                                <div class="texto">
                                    <img style="width:100px;height:auto;" src="http://sba1.com/arquivos/play.png">
                                </div>
                            </div>
                            
                            <div class="col s12 dados">
                                <h5>1º Leilão de Facas</h5>
                                <h1 style="font-size:2rem;"><?= $item->snippet->title;  ?></h1>
                            </div>

                        </a>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>

    </div>

</div>





<div class="container-sky">

    <div class="row">

        <div class="row">

            <?php foreach($facas as $faca): ?>

                <div class="col s12 m6 l3">

                    <div class="espaco-faca">

                        <div style="font-size:1.50rem;font-weight:600;color:#000;padding:7px;">
                            Lote #<?= $faca->lote ?>
                        </div>

                        <div class="caixa-faca">

                            <div class="col s12">

                                <div class="faca-foto" style="margin-top:10px;">
                                    <img class="responsive-img materialboxed" id="fotofaca<?= $faca->lote ?>" class="responsive-img" src="<?= $faca->picture1 ?>">
                                </div>

                            </div>

                            <?php if(!empty($faca->picture1)): ?>

                                <div class="col s4" style="border-radius:9px;margin-top:12px;">
                                    <center>
                                        <a onclick='document.getElementById("fotofaca<?= $faca->lote ?>").src = "<?= $faca->picture1 ?>"'>
                                            <img class="responsive-img" src="<?= $faca->picture1 ?>">
                                        </a>
                                    </center>
                                </div>

                            <?php endif; ?>

                            <?php if(!empty($faca->picture2)): ?>

                                <div class="col s4" style="border-radius:9px;margin-top:12px;">
                                    <center>
                                        <a onclick='document.getElementById("fotofaca<?= $faca->lote ?>").src = "<?= $faca->picture2 ?>"'>
                                            <img class="responsive-img" src="<?= $faca->picture2 ?>">
                                        </a>
                                    </center>
                                </div>

                            <?php endif; ?>

                            <?php if(!empty($faca->picture3)): ?>

                                <div class="col s4" style="border-radius:9px;margin-top:12px;">
                                    <center>
                                        <a onclick='document.getElementById("fotofaca<?= $faca->lote ?>").src = "<?= $faca->picture3 ?>"'>
                                            <img class="responsive-img" src="<?= $faca->picture3 ?>">
                                        </a>
                                    </center>
                                </div>

                            <?php endif; ?>

                            <div class="col s12" style="padding:0px;">

                                <div style="padding:10px;font-weight:800;font-size:1.35rem;">
                                    <b><?= $faca->name ?></b>
                                </div>

                                <div style="padding-left:9px;padding-bottom:9px;">
                                    <b style="font-weight:800;font-size:1.32rem;">Maior Oferta: R$
                                        <?php if(!empty($faca->lances[0]->valor)): ?>
                                            <?= $faca->lances[0]->valor ?>
                                        <?php else: ?>
                                            0
                                        <?php endif; ?>
                                    </b>
                                </div>

                            </div>

                            <a class="waves-effect waves-light btn col s12 modal-trigger" href="<?= $configuracoes["site_url"] ?>/facas/detalhes/<?= $faca->id ?>" onclick="return !window.open(this.href, 'SBA FACAS', 'width=620, height=750, left=200, top=100, scrollbars, resizable')" target="_blank" style="margin-top:6px;border-radius:7px;">DAR PRÉ LANCE</a>

                        </div>
                        
                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </div>

</div>

<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("botao");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("ativo");
    current[0].className = current[0].className.replace(" ativo", "");
    this.className += " ativo";
  });
}
</script>

<?php foreach($playlist->items as $item): ?>

<div id="lote<?= $item->snippet->resourceId->videoId ?>" class="modal" style="background-color:transparent;">
    <div class="videoWrapper">
        <iframe width="560" height="349" src="https://www.youtube.com/embed/<?= $item->snippet->resourceId->videoId ?>" frameborder="0" allowfullscreen></iframe>
    </div>
</div>

<?php endforeach; ?>