<?php $this->assign('title', 'Venda de Facas'); ?>

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
            <img class="responsive-img" data-aos="fade-up" data-aos-duration="800" style="max-height:350px" src="img/facas-logo.png">
        </center>

    </div>

</div>

<div class="container-corpo">

    <div class="row">

        <div class="col s12 titulo-widget" data-aos="fade-up" data-aos-duration="1000" style="padding-left:10px;padding-right:10px;">

            <h1>Facas</h1>

        </div>

    </div>

</div>

<div class="col s12" style="background-color:#ebebeb;">

    <div class="container-corpo">

        <div class="row" style="padding:0px;">

            <div class="col s12" style="padding-left:0px;padding-right:0px;">

                <?php foreach($facas as $faca): ?>

                    <?php

                        $link = $faca->video;
                        $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
                        if (empty($video_id[1]))
                            $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

                        $video_id = explode("&", $video_id[1]); // Deleting any other params
                        $video_id = $video_id[0];
                    ?>

                    <div class="col s12 m6 l3 xl3 noticias-home" data-aos="fade-up" data-aos-duration="1200" style="margin-bottom:50px;">

                        <a class="modal-trigger" href="#lote<?= $faca->lote ?>">

                            <div class="col s12 thumbnail" style="position: relative;background-image:url(https://i.ytimg.com/vi/<?= $video_id ?>/hqdefault.jpg);">
                                <div class="texto">
                                    <img style="width:100px;height:auto;" src="http://sba1.com/arquivos/play.png">
                                </div>
                            </div>
                            
                            <div class="col s12 dados" style="min-height:260px">
                                <h5 style="font-size:1rem;">Venda de Facas</h5>
                                <h1 style="font-size:2.1rem;">Lote <?= $faca->lote;  ?></h1>
                                <p style="line-height: 200%;font-color:#000;margin-top:0px;padding-top:0px;"><?= $faca->descricao ?></p>
                                
                            </div>

                        </a>

                    </div>

                <?php endforeach; ?>

                <div class="col s12" style="padding:10px;">

                    <ul class="pagination">

                        <?= $this->Paginator->prev(__('<i class="fas fa-arrow-left"></i>'),
                            ['tag' => 'li', 'escape' => false],
                            null,
                            ['tag' => 'li','class' => 'disabled','disabledTag' => 'a']);
                        ?>

                        <?= $this->Paginator->numbers([
                            'separator' => '',
                            'currentTag' => 'a',
                            'currentClass' => 'active',
                            'tag' => 'li',
                            'first' => 1]);
                        ?>

                        <?= $this->Paginator->next(__('<i class="fas fa-arrow-right"></i>'),
                            ['tag' => 'li', 'escape' => false,'currentClass' => 'disabled'],
                            null,
                            ['tag' => 'li','class' => 'disabled','disabledTag' => 'a']);
                        ?>

                    </ul>

                </div>

            </div>

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

<?php foreach($facas as $faca): ?>

    <?php

        $link = $faca->video;
        $video_id = explode("?v=", $link); // For videos like http://www.youtube.com/watch?v=...
        if (empty($video_id[1]))
            $video_id = explode("/v/", $link); // For videos like http://www.youtube.com/watch/v/..

        $video_id = explode("&", $video_id[1]); // Deleting any other params
        $video_id = $video_id[0];

    ?>

    <div id="lote<?= $faca->lote ?>" class="modal" style="background-color:transparent;">
        <div class="videoWrapper">
            <iframe width="560" height="349" src="https://www.youtube.com/embed/<?= $video_id ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>

<?php endforeach; ?>