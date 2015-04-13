<?php

// send email to samngay@gmail.com
$to = "samngay@gmail.com";
$subject = "Đặt hàng trước: " . $_POST['product'];
$message = "Họ tên khách hàng: " . $_POST['product'] . '<br/>' . 'Địa chỉ: ' . $_POST['address'] . 'Điện thoại ' . $_POST['phone'];
$headers = "From:" $_POST['email'];


mail($to,$subject,$message,$headers);

?>
