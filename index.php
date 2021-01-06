<?php
$title='Tiện ích Pro - Pro321.CF';
$key='pro321.cf, tien ich pro, tao logo online cuc dep, xem ma nguon, get link youtube, xem thong tin ten mien, chup anh wap/web online';
$des='Pro321.cf - tiện ích pro, tạo logo online cực đẹp, xem mã nguồn, get link youtube, xem thông tin tên miền, chụp ảnh wap/web online';
include 'head.php';
?>
<div class="panel panel-primary"><div class="panel-heading">Danh Mục</div><div class="list-group">
<a class="list-group-item" href="tao-logo" title="tạo logo cực đẹp">Tạo Logo Cực Đẹp</a>
<a href="leech" class="list-group-item" title="Tool lấy nội dung">Tool Leech Nội Dung</a>
<a class="list-group-item" href="/tien-ich/source.php" title="xem mã nguồn">Xem Mã Nguồn</a>
<a class="list-group-item" href="/tien-ich/chupanhwap" title="chụp ảnh wap/web">Chụp Ảnh Wap/Web Online</a>
<a href="mod-java" class="list-group-item" title="Tổng hợp tool mod java online">Tổng Hợp Tool Mod Java Online</a>
<a href="getlink" class="list-group-item" title="Tổng hợp tool get link">Tổng Hợp Tool Get Link</a>
<a class="list-group-item" href="xviet" title="Hỗ trợ xViet.Mobi">Hỗ Trợ xViet</a>
<a class="list-group-item" href="xtgem" title="Hỗ trợ Xtgem">Tổng Hợp Tool Hỗ Trợ Xtgem</a>
<a class="list-group-item" href="tien-ich/whois" title="whois domain">Kiểm Tra Thông Tin Tên Miền</a>
</div></div>
<?php
require_once 'end.php';
die;
if(thanh()=='vesion') { 
echo 'Bạn đang truy cập wap bằng điện thoại';
} else { 
echo 'Bạn đang truy cập web bằng máy tính';
}
?>