<?php
require("config.php");
require("../lib/db.php");
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
##$result = mysqli_query($conn, "SELECT * FROM member_info");
$sql = "select * from member_info where name='".$_POST['member_id']."'";
$result = mysqli_query($conn, $sql);
if ($result -> num_rows == 0) {
  $enc_pw = hash('sha512', $_POST['member_pw']);
  $join = "insert into `member_info` ('id`, `pw`, `name`, `sex`, `age`, `address`, `phone`, `working place`, `start`) values('".$_POST['member_id']."', '".$enc_pw."','".$_POST['name']."','".$_POST['sex']."','".$_POST['age']."','".$_POST['address']."','".$_POST['phone']."','".$_POST['work']."', now())";
  mysqli_query($conn,$join);
} else {

}
echo $join;
##$result = mysqli_query($conn, $sql);
##header('Location:join.php');
 ?>
