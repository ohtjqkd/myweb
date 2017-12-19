<?php
require("config.php");
require("../lib/db.php");

if(!isset($_POST['member_id']) || !isset($_POST['member_pw'])) exit;
$ID = $_POST['member_id'];
$PW = hash('sha512', $_POST['member_pw']);
$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
$sql = "select * from member_info where id='".$ID."'";
$result = mysqli_query($conn, $sql);
$members = mysqli_fetch_assoc($result);

if(!isset($members['id'])) {
        echo "<script>alert('아이디 또는 패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
if($members['pw'] != $PW) {
        echo "<script>alert('패스워드가 잘못되었습니다.');history.back();</script>";
        exit;
}
session_start();
$_SESSION['user_id'] = $ID;
$_SESSION['user_name'] = $members['name'];
?>
<meta http-equiv='refresh' content='0;url=checklist.php'>
