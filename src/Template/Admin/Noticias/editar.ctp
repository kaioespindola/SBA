<?= $this->Form->create($noticia, [
    'enctype' => 'multipart/form-data'
    ])
?>

<h4><i class="fa fa-clone"></i> Editar Notícia</h4>

<div class="row">

    <div class="col l8 m8 s12" style="margin-right:15px;margin-top:5px;" data-aos="fade-up" data-aos-duration="1500">

        <div class="col s12" style="padding:0px;">

            <p>Chapéu</p>
            <?= $this->Form->input('chapeu', [
                'label' => false,
                'placeholder' => 'Deixe vázio caso queira utilizar o título da notícia',
                'class' => 'white',
                'style' => 'padding-left:7px;font-size:18px;margin-bottom:-5px;'
            ]) ?>

        </div>

        <div class="col s12" style="padding:0px;">

            <p>Título</p>
            <?= $this->Form->input('name', [
                'label' => false,
                'placeholder' => ' O nome é como aparece em seu site',
                'class' => 'white',
                'style' => 'padding-left:7px;font-size:18px;'
            ]) ?>

            <div style="margin-top:-10px;padding-left:7px;color:#757575;font-size:12px;margin-bottom:10px;">
                Slug: <b><?= $noticia->slug ?></b>
            </div>

        </div>

        <div class="col s12" style="padding:0px;">

            <p>Linha Fina</p>
            <?= $this->Form->input('fina', [
                'label' => false,
                'placeholder' => ' Linha fina',
                'class' => 'white',
                'style' => 'padding-left:7px;font-size:18px;'
            ]) ?>

        </div>

        <div class="col s6" style="padding:0px;">

            <p>Por</p>
            <?= $this->Form->input('jornalista', [
                'label' => false,
                'placeholder' => ' Jornalista responsável pela matéria',
                'class' => 'white',
                'style' => 'padding-left:7px;font-size:18px;'
            ]) ?>

        </div>

        <div class="col s6" style="padding:0px;">

            <p>Local</p>
            <?= $this->Form->input('local', [
                'label' => false,
                'placeholder' => ' Local de origem da matéria',
                'class' => 'white',
                'style' => 'padding-left:7px;font-size:18px;'
            ]) ?>

        </div>

        <div class="col s6 white z-depth-1">

            <div style="font-size:19px;margin-top:5px;margin-bottom:10px;">Categoria</div>

                <?= $this->Form->input('categories._ids', [
                    'label' => 'Escolha a categoria da notícia',
                    'options' => $categories,
                    'empty' => '(Nenhuma)',
                    'type' => 'select',
                    'multiple' => true
                ]) ?>

        </div>

        <div class="col s6 white z-depth-1">

            <div style="font-size:19px;margin-top:5px;margin-bottom:10px;">Tags</div>

                <?= $this->Form->input('tags._ids', [
                    'label' => 'Escolha as tags da notícia',
                    'options' => $tags,
                    'empty' => '(Nenhuma)',
                    'type' => 'select',
                    'multiple' => true
                    ]);
                ?>

        </div>

        <div class="col s12" style="padding:0px;margin-top:20px;padding-bottom:30px;">

            <?= $this->Form->textarea('text',[
            'class'=>'ckeditor'
            ]) ?>

        </div>

    </div>

    <div class="col l3 m3 s12" style="margin-top:35px;" data-aos="fade-up" data-aos-duration="2000">

        <div class="row">

            <div class="col s12 white z-depth-1">

                <div style="font-size:19px;margin-top:5px;">Publicar</div>

                <div class="row">

                    <div class="col s12">
                        <p><i class="fa fa-eye"></i> Privacidade:</p>
                    </div>

                    <?= $this->Form->input('privacidade', [
                      'label' => '',
                      'type' => 'select',
                      'class' => 'col s11',
                      'options' => [1 => 'Público', 0 => 'Privado']
                    ]) ?>

                </div>

                <div class="row">

                    <div class="col s12">
                        <p><i class="fa fa-eye"></i> Destaque:</p>
                    </div>

                    <?= $this->Form->input('destaque', [
                      'label' => '',
                      'type' => 'select',
                      'class' => 'col s11',
                      'options' => [1 => 'Sim', 0 => 'Não']
                    ]) ?>

                </div>

                <div class="row">

                    <div class="col s12">
                        <p><i class="fa fa-calendar"></i> Publicado em:</p>
                    </div>

                    <div class="col s11">
                        <input type="text" name="date" value="<?= $noticia->date ?>" id="date" data-field="datetime" readonly>
                        <div id="dtBox"></div>
                    </div>

                </div>

                <?= $this->Form->button('Salvar', [
                    'class' => 'col btn green darken-4 s12 waves-effect waves-green',
                    'type' => 'submit',
                    'escape' => false,
                    'style' => 'margin-bottom:10px;'
                ]) ?>

                <br><br>

            </div>

            <div class="col s12 white z-depth-1" style="margin-top:25px;">

                <div class="row">

                    <div class="col s12">
                        <p><i class="fa fa-eye"></i> Usar Thumbnail:</p>
                    </div>

                    <?= $this->Form->input('usarthumb', [
                    'label' => '',
                    'type' => 'select',
                    'class' => 'col s11',
                    'options' => [1 => 'Sim', 0 => 'Não']
                    ]) ?>

                </div>

            </div>

            <div class="col s12 white z-depth-1" style="margin-top:25px;">

                <div style="font-size:19px;margin-top:5px;margin-bottom:10px;">Thumbnail</div>

                <div class="previa">
                    <img src="<?= $noticia->thumbnail ?>" class="previa-imagem responsive-img" alt="">
                </div>

                <?= $this->Form->input('thumbnail', [
                    'id' => 'thumbnail',
                    'name' => 'thumbnail',
                    'label' => 'Atualizar Imagem',
                    'placeholder' => 'Escolha uma imagem',
                    'type' => 'text',
                    'class' => 'previa',
                ]) ?>
                <!-- Fim de upload de imagem de thumbnail -->
                <a class="btn col s10 green darken-4 gerenciadordemidia" data-fancybox-type="iframe" href="<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=1&field_id=thumbnail&relative_url=1&sort_by=name&fldr=noticias/<?= date('Y'); ?>/<?= date('m'); ?>&akey=1ca6984gas62495k2asifcyqpf34863c"><i class="fa fa-file-o"></i> Escolher Arquivo</a>

                <a class="btn col s2 grey darken-4 remover" href="">
                    <i class="fas fa-trash"></i>
                </a>

                <br><br>

            </div>

            <div class="col s12 white z-depth-1" style="margin-top:25px;">

                <div style="font-size:19px;margin-top:5px;margin-bottom:10px;">Link Externo</div>

                <?= $this->Form->input('link', [
                    'label' => false,
                    'placeholder' => 'Redirecione a notícia para um link externo',
                    'class' => 'white',
                    'style' => 'padding-left:7px;font-size:18px;margin-bottom:-5px;',
                ]) ?>

            </div>

        </div>

    </div>

</div>

<?= $this->Form->end() ?>

<script>
    CKEDITOR.replace( 'text' ,{
        filebrowserBrowseUrl : '<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=1&editor=ckeditor&fldr=noticias/<?= date('Y'); ?>/<?= date('m'); ?>&CKEditor=text&relative_url=0&langCode=pt-br&akey=1ca6984gas62495k2asifcyqpf34863c',
        filebrowserUploadUrl : '<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=1&editor=ckeditor&fldr=noticias/<?= date('Y'); ?>/<?= date('m'); ?>&CKEditor=text&relative_url=0&langCode=pt-br&akey=1ca6984gas62495k2asifcyqpf34863c',
        filebrowserImageBrowseUrl : '<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=1&editor=ckeditor&fldr=noticias/<?= date('Y'); ?>/<?= date('m'); ?>&CKEditor=text&relative_url=0&langCode=pt-br&akey=1ca6984gas62495k2asifcyqpf34863c'
    });
</script>

<script>
$('.previa').on('change keyup paste click', function(){
    var inputVal = $(this).val();
    $('.previa-imagem').attr('src', inputVal).fadeIn();
})

$('.remover').on('click', function(){
    var href = $(this).attr('href');
    $('.previa').val(href).trigger('change');
    return false;
})
</script>
                    
<script>
$(".gerenciadordemidia").fancybox({
    maxWidth    : 1200,
    maxHeight   : 700,
    fitToView   : true,
    width       : '90%',
    height      : '90%',
    autoSize    : false,
    closeClick  : true,
    openEffect  : 'elastic',
    closeEffect : 'elastic'
});
</script>