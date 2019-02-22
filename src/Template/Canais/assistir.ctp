<style>
	body {
		background: transparent;
	}
</style>

<?php $this->assign('title', $canal->name); ?>
<div id="<?= $canal->slug ?>" style="margin:0px;padding:0px;"></div>
<script>
	var playerInstance = jwplayer("<?= $canal->slug ?>");
	playerInstance.setup({
		file: "<?= $canal->m3u8 ?>",
		image: "https://sba1.com/webroot/img/canais/<?= $canal->picture ?>", 
		mediaid: "Dk85fAbY"
	});
</script>