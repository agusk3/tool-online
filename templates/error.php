<?php echo $this->inc('header.php', ['title' => 'Lỗi -  Youtube Downloader Error']); ?>
<div class="well">
	
		<div class="alert alert-danger">
			<?php echo $this->get('error_message'); ?></p>
		</div>
	<a class="btn btn-primary btn-lg pull-right" href="index.php">Quay lại</a>
		<div class="clearfix"></div>
		<hr />
			
		<div class="clearfix"></div>
</div>
<?php echo $this->inc('footer.php'); ?>
