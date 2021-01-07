<?php echo $this->inc('header.php', ['title' => 'Tải Xuống '.$this->get('video_title').'']);
$getVideo = '<div class="alert alert-success"><center> ĐƯỢC GET LINK BỞI <b>DL5S.CF</b></center></div>
			
	<hr /><div class="well">
	
	<div id="info">';
	if ($this->get('show_thumbnail') === true) {
		$getVideo .= '<a href="'.$this->get('thumbnail_anchor').'" target="_blank"><img src="'.$this->get('thumbnail_src').'" border="0" hspace="2" vspace="2"></a>';
	}
	$getVideo .= '<p>'.$this->get('video_title').'</p></div>';
	if ($this->get('no_stream_map_found', false) === true) {
		$getVideo .= '<p>No encoded format stream found.</p>
		<p>Here is what we got from YouTube:</p>
		<pre>'.$this->get('no_stream_map_found_dump').'</pre>';
	}
	else {
		if ($this->get('show_debug1', false) === true) {
			$getVideo .= '<pre>'.$this->get('debug1').'</pre>';
		}
		if ($this->get('show_debug2', false) === true) {
			$getVideo .= '<p>These links will expire at '.$this->get('debug2_expires').'</p>
			<p>The server was at IP address '.$this->get('debug2_ip').' which is an '.$this->get('debug2ipbits').' bit IP address. Note that when 8 bit IP addresses are used, the download links may fail.</p>';
		}
		$getVideo .= '<center><hr><b>CÁC ĐỊNH DẠNG VIDEO CÓ ÂM THANH</b><br>
		<ul class="dl-list">';
		foreach($this->get('streams', []) as $format) {
			if ($format['size'] != 0){
				$getVideo .= '<li>
					<a class="btn btn-default btn-type disabled" href="#">'.$format['type'].' - '.$format['quality'].'</a>';
				if ($format['show_direct_url'] === true) {
					$getVideo .= '<a class="btn btn-default btn-download" href="'.$format['direct_url'].'" class="mime"><i class="glyphicon glyphicon-download-alt"></i> Direct</a>';
				}
				if ($format['show_proxy_url'] === true) {
					$getVideo .= '<div ><a class="label label-primary btn-download" href="'.$format['proxy_url'].'" class="mime"><i class="glyphicon glyphicon-download-alt"></i> Tải xuống tốc độ cao </a></div> ';
				}
				$getVideo .= '  <div class="label label-warning">'.$format['size'].'</div>
				<div class="label label-default">'.$format['itag'].'</div>
			</li>';
			}
			else
				$getVideo .= ' ';
		}
		$getVideo .= '</ul>
		<hr />
		<b>VIDEO KHÔNG CÓ ÂM THANH</b><br>
		<ul class="dl-list">';
		foreach($this->get('formats', []) as $format) {
			if ($format['size'] != 0){
				$getVideo .= '<li>
					<a class="btn btn-default btn-type disabled" href="#">'.$format['type'].' - '.$format['quality'].'</a>';
				if ($format['show_direct_url'] === true) {
					$getVideo .= '<a class="btn btn-default btn-download" href="'.$format['direct_url'].'" class="mime"><i class="glyphicon glyphicon-download-alt"></i> Direct</a>';
				}
				if ($format['show_proxy_url'] === true) {
					$getVideo .= '<div><a class="label label-primary btn-download" href="'.$format['proxy_url'].'" class="mime"><i class="glyphicon glyphicon-download-alt"></i> Tải xuống video không âm thanh</a></div>';
				}
				$getVideo .= '<div class="label label-warning">'.$format['size'].'</div>
					<div class="label label-default">'.$format['itag'].'</div>
				</li>';
			}
			else
				$getVideo .= ' ';
		}
		$getVideo .= '</ul>';
		if ($this->get('showMP3Download', false) === true) {
			$getVideo .= '<hr><b> TẢI XUỐNG ĐỊNH DẠNG .MP3 </b>
				<ul class="dl-list">
					<li>
						<!--<a class="btn btn-default btn-type disabled" href="#" class="mime">audio/mp3 - '.$this->get('mp3_download_quality').'</a>
						<a class="btn btn-primary btn-download" href="'.$this->get('mp3_download_url').'" class="mime"><i class="glyphicon glyphicon-download-alt"></i> Convert and Download</a>-->
			<div class="alert alert-danger"><center> Hiện tại đang bảo trì tải xuống <b>.MP3</b></center></div>		</li>
				</ul>';
		}
		$getVideo .= '<hr />
		<p><small>Lưu ý: Bạn bắt đầu tải xuống bằng cách nhấp vào "Direct" để tải xuống từ máy chủ gốc hoặc bằng cách nhấp vào "Tải xuống tốc độ cao" để sử dụng máy chủ này làm server tải xuống.</small></p>';
		if ($this->get('showBrowserExtensions', false) === true) {
			$getVideo .= '<p> </p>';
		}
	}
	$getVideo .= '<hr />
		
			<div class="clearfix"></div>
	</div>';
	$getVideo .= $this->inc('footer.php'); 
	echo $getVideo;
?>
