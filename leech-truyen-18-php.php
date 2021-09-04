<!DOCTYPE html>
<html>
<head>
    <title>Tool Leech</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
<body>
<?php
session_start();
$title = 'Tool Leech Truyện Truyensex.tv by NguyenTuAnh';
$key = $title;
$des = $key;
include 'template/header.php';
echo '<div class="panel panel-primary"><div class="phdr"><b>'.$title.'</b></div><div class="list1">';

if(!isset($_POST['url']) ){
echo '<div class="list-group-item"><form action="" method="post">
Link bài viết cần leech:<br/>
<input name="url" type="url" value="" focus="focus"/><br/>
<input type="submit" value="Leech"/></div>';
}
else {
$url = $_POST['url'];
$type = $_POST['type'];
$ch = curl_init();
$ua = 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36';
curl_setopt($ch, CURLOPT_USERAGENT, $ua);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_URL, $url);
$title = curl_exec($ch);
$title = explode('<title>',$title);
$title = explode('</title>',$title[1]);
$title = explode('|', $title[0]);
$title = trim($title[0]);
//Get tiêu đề
curl_setopt($ch, CURLOPT_URL, $url);
$nd = curl_exec($ch);
$nd = explode('<div style="background:#f7f7f7;border:1px solid #ddd;color:#333;margin-bottom:5px;line-height:150%;padding:5px;font-size:14px">',$nd);
$nd = explode('</div>',$nd[1]);
$nd = strip_tags($nd[0], '<p>');
$nd = html_entity_decode($nd, ENT_QUOTES, 'UTF-8');
$nd = str_replace('

', '
', $nd);
$nd = str_replace('


', '
', $nd);
$nd = str_replace('




', '
', $nd);
$nd = preg_replace('#<p>#is','', $nd);
$nd = preg_replace('#</p>#is','', $nd); 
if($title=='') {
$title = "Lỗi Dữ Liệu";
$nd = $title;
} 
echo '<div class="list1"><font color="green">Đã leech xong!</font><br/>';
echo '<br/>
<b>Tiêu Đề Bài Viết</b>:<br/>
<textarea>'.$title.'</textarea>
<br/>
<b>Nội Dung Bài Viết</b>:
<br/>
<textarea rows="7">'.trim($nd).'</textarea></div>';
}
echo '<a class="list-group-item" href=""><b> > Quay Lại</b></a></div></div>';
include 'template/footer.php';
?></body></html>
