<?php
$to="saksham.katiyar52@gmail.com";
$subject="dekho a gyi ab";
$body="done this email process";
$sender="yadav.ahul510@gmail.com";
$header="From : $sender";
if(mail($to, $subject, $body, $sender)){
    echo "email send successfully";
}else{
    echo "not sent";
}
?>