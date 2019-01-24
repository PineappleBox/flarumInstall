<?php
$installer = file_get_contents(/php-install.txt');
$installer .= file_get_contents('/html-install.txt');
$file = file_put_contents('installer.php',$installer);
unlink(basename(__FILE__));
header('Location: installer.php');
