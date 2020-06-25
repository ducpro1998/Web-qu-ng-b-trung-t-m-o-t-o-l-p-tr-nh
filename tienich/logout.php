<?php
session_start();
session_destroy();
echo "<h3> Bạn đã đăng xuất khỏi quản trị</h3> <br>";
echo "<a href='?module=login'> Mời đăng nhập lại </a>";
?>