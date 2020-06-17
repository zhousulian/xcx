<?php
phpinfo();
$uid = $_SESSION['user'];
if(!empty($uid)){
    echo "one fiel";
}else{
    echo "页面错误";
}



?>
