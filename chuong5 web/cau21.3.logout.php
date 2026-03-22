<?php
session_start();
session_destroy();

header("Location: cau21.1.login.html");
exit();
?>