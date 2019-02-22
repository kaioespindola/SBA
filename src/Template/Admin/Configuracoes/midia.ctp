<style>
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
    border:0;
}
</style>

<h4><i class="far fa-images"></i> Gerenciar Mídias</h4>

<div class="col l10 m12 s12 white" style="padding:15px;">

    <div class="videoWrapper">
        <iframe src="<?= $configuracoes['site_url'] ?>filemanager/dialog.php?type=1&sort_by=date&$fodler=&akey=1ca6984gas62495k2asifcyqpf34863c" ></iframe>
    </div>

</div>