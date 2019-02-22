<?= $this->Form->create($pagina, [
    'enctype' => 'multipart/form-data'
    ])
?>

<h4><i class="fa fa-clone"></i> Editar Página</h4>

<div class="row">

	<div class="col s8" style="margin-right:15px;margin-top:5px;">

        </p>Nome da Página</p>
        <?= $this->Form->input('name', [
            'label' => false,
            'placeholder' => ' O nome é como aparece em seu site',
            'class' => 'white',
            'style' => 'padding-left:7px;font-size:18px;'
        ]) ?>

        <div style="margin-top:-10px;padding-left:7px;color:#757575;font-size:12px;margin-bottom:10px;">
            Slug: <b><?= $pagina->slug ?></b>
        </div>

        <?= $this->Form->textarea('text',[
        'class'=>'ckeditor'
        ]) ?>

	</div>

    <div class="col s2" style="margin-top:35px;">

        <div class="row">

            <div class="col s12 white z-depth-1">

                <div style="font-size:19px;margin-top:5px;">Publicar</div>

                <div class="col s12">
                    <p><i class="fa fa-eye"></i> Visibilidade:</p>
                </div>

                <?= $this->Form->input('visibilidade', [
                  'label' => '',
                  'type' => 'select',
                  'class' => 'col s11',
                  'options' => [1 => 'Público', 0 => 'Privado']
                ]) ?>

                <div id="dtBox"></div>

                <?= $this->Form->button('Salvar', [
                    'class' => 'col btn green darken-4 s12 waves-effect waves-green',
                    'type' => 'submit',
                    'escape' => false,
                    'style' => 'margin-bottom:10px;'
                ]) ?>

            </div>

            <!-- Corte de Widget -->

            <div class="col s12 white z-depth-1" style="margin-top:25px;">

                <div style="font-size:19px;margin-top:5px;margin-bottom:10px;">Atributos da Página</div>

                    <?= $this->Form->input('parent_id', [
                        'label' => 'Escolha a página pai',
                        'options' => $parentCategories,
                        'empty' => '(Nenhum)',
                        'class' => 'col s12'
                    ]) ?>

            </div>

            <!-- Corte de Widget -->

            <div class="col s12 white z-depth-1" style="margin-top:25px;">

                <div style="font-size:19px;margin-top:5px;margin-bottom:10px;">Thumbnail</div>

                <div class="previa">
                    <img src="<?= $pagina->thumbnail ?>" class="previa-imagem responsive-img" alt="">
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
                <a class="btn col s10 green darken-4 gerenciadordemidia" data-fancybox-type="iframe" href="<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=2&field_id=thumbnail&relative_url=1&sort_by=date&fldr=paginas&akey=1ca6984gas62495k2asifcyqpf34863c"><i class="fa fa-file-o"></i> Escolher Arquivo</a>

                <a class="btn col s2 grey darken-4 remover" href="">
                    <i class="fa fa-remove"></i>
                </a>

                <br><br>

            </div>

            <!-- Corte de Widget -->

    </div>

</div>

<?= $this->Form->end() ?>

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