<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>
      나만 알고 싶은 노래
    </title>
  </head>
  <body>
    <header>
      <h1 style="text-align:center;">Ohdori's home</h1>
      <div class="top-right">
        <ul>
          <li><a href="index.php">메인</a></li>
          <li><a href="join.php">회원가입</a></li>
          <li><a href="login.php">log in</a></li>
          <li><a href="mypage">나의 페이지</a></li>
        </ul>
      </div>
    </header>
    <article>
      <div>
        <form class="" action="list_process.php" method="post">
          항목:<input type="text" name="list" value=""><p>
          파트:<input type="text" name="part" value=""><p>
          <input type="submit" name="등록" value="등록"><p>
        </form>
      </div>
    </article>
  </body>
</html>



<?php  ?>
