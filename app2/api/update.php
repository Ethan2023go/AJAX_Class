<?php
//處理更新資料的請求
include_once "db.php";
$Student->save($_POST);
to('../index.html');

// 與insert api相同故直接合成save.php
?>