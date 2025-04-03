<?php
session_start();
session_destroy();
header("Location: /project/E-commerce website/templates/index.php");
exit();
?>