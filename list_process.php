<?php
require("config.php");
require("../lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$insert_list = "insert into `checklist` (`list`, `part`) values('".$_POST['list']."','".$_POST['part']."')";
mysqli_query($conn,$insert_list);
header('Location:modify_list.php');
?>
