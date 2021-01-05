<?php

/**

 * Code by thaibinhvip - https://www.facebook.com/botsim

 * @Copyright S2VN.TOP

 * Website: https://nam.name.vn

 * 

 */

$key = 'Tool Get Link Download Youtube';

$mkey = 'Tìm nhạc và lấy link tải mp3 , Tải youtube miễn phí cho mobile, Lấy link , download youtube không cần tool.';

include '../../template/header.php';

echo '<div class="breadcrumb-nen">

<div class="qdk_breadcrumb" xmlns:v="http://rdf.data-vocabulary.org/#"><div class="breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><span class="crumb" style="padding-left:8px;" typeof="v:Breadcrumb"><a href="/" rel="v:url" property="v:title">Home</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/" title="GetLink">GetLink</a></span>  <span class="crumb" typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="/code/youtube/" title="Tool Get Link Download Youtube">Tool Get Link Download Youtube</a></span></div> </div></div>';

echo '<div class="gmenu">Tải video từ Youtube - Nhanh, miễn phí và đơn giản chuyển đổi video Youtube sang MP3, MP4 cùng nhiều định dạng khác nhau.</div>';

echo '<div class="menu">

<strong>Link hỗ trợ: </strong>youtube.com/watch?v=...<br/>

youtu.be/...<br/>

youtube.com/embed/...<br/>

youtube-nocookie.com/embed/...<br/>

youtube.com/watch?feature=player_embedded&v=...<br />

<form method="get" action="http://s2-vn.a3c1.starter-us-west-1.openshiftapps.com/Video/getvideo.php">  

<input type="text" name="videoid" placeholder="https://youtube.com/watch?v=_JX0x57JeXc">

<input type="submit" value="Download" name="type" />

</form>

<div id="listLink"></div>

</div>';

?>

<?php 

include '../list.php';

include '../../template/footer.php'; ?>
