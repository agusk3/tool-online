<?php echo $this->inc('header.php', ['title' => 'Get Link YouTube - Tải Video YouTube - DL5S.CF']); ?>
	<div class="well">
		<form class="" method="get" id="download" action="getvideo.php">
			<!--<h1 class="form-download-heading">Youtube Downloader</h1>-->
				<div class="input-group">
				  <input type="text" name="videoid" id="videoid" class="form-control input-lg" placeholder="YouTube Link or VideoID" autofocus>
					<input type="hidden" name="type" id="type" value="Download"/>
					<span class="input-group-btn">
					<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Lấy Link" />
				  </span>
				</div><!-- /input-group --><hr>
			<div class="video-info">
				<p>Các link hợp lệ:</p>
					<ul>
						<li>youtube.com/watch?v=...</li>
						<li>youtu.be/...</li>
						<li>youtube.com/embed/...</li>
						<li>youtube-nocookie.com/embed/...</li>
						<li>youtube.com/watch?feature=player_embedded&v=...</li>
					</ul>
			</div>
		<!-- @TODO: Prepend the base URI -->
		<?php
		if ( $this->get('showBrowserExtensions') === true )
		{
			echo '<center><a href="ytdl.user.js" class="btn btn-sm btn-success" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Cài Đặt Tiện Ích Cho Chrome </a></center>';
		}
		?>
		<hr /><center>
		<h1 style="font-size:36"><i class="glyphicon glyphicon-hd-video"></i> </h1>
<b>Nhanh chóng và dễ dàng để sử dụng</b><br>
Không có trình chuyển đổi youtube đơn giản và nhanh hơn: bạn chỉ cần dán liên kết url video bạn muốn tải xuống vào trường trên và vài giây sau bạn sẽ có được một bản video với chất lượng ban đầu.
		<div class="clearfix"></div>
		</form>
	</div>
<?php echo $this->inc('footer.php'); ?>
