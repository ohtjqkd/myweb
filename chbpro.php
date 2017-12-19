<?php
require("config.php");
require("../lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
print_r($_POST);
var_dump($chkBox[0]);
$query = "insert into `dailycheck`(`id`,`listno`,`chkbool`) value('"."')";
echo $query;
?>
