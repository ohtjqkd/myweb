<?php
require("config.php");
require("../lib/db.php");
$conn = db_init($config["host"], $config["duser"], $config["dpw"], $config["dname"]);
?>
<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_name'])) {
	echo "<meta http-equiv='refresh' content='0;url=login.php'>";
	exit;
}
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];
?>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
      체크리스트
    </title>
  </head>
  <body>
    <header>
      <h1 style="text-align:center;">WeWork</h1>
      <div class="top-right">
        <ul>
<?php echo "<li>안녕하세요. $user_name($user_id)님</li>"; ?>
          <li><a href="mypage">나의 페이지</a></li>
          <li><a href='logout.php'>로그아웃</a></li>
        </ul>
      </div>
    </header>
		<?php
			require("navigation.php");
 		?>
		<div id="content">
      <article>
			     <form class="" action="chbpro.php" method="post">
             <table>
               <tbody>
                 <tr>
                   <th>No.</th>
                   <th>항목</th>
                   <th>체크박스</th>
                   <th>비고</th>
                 </tr>
                 <?php
                 $result = mysqli_query($conn, "SELECT * FROM checklist");
                 $i = 0;
                 while ($row = mysqli_fetch_assoc($result)) {
                   $i = $i + 1;
                   echo "<tr>
                   <td>".$i."</td>
                   <td>".$row['list']."</td>
                   <td>
					              <input type=\"checkbox\" name=\"chkBox[]\" value=\"".$row['no']."\">
                   </td>
				           <td>
				           </td>";
                 }
                 ?>


             </tbody>
      	   </table>
           <input type="submit" name="제출" value="제출">
			  </form>
    </article>
	</div>
  </body>
</html>
<?php  ?>
