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
      <div id="join">
        <form class="" action="join_member.php" method="post">
          ID:<input type="text" name="member_id" value=""><p>
          비밀번호:<input type="text" name="member_pw" value=""><p>
          이름:<input type="text" name="name" value=""><p>
          성별:<input type="text" name="sex" value=""><p>
          나이:<input type="text" name="age" value=""><p>
          주소:<input type="text" name="address" value=""><p>
          전화번호:<input type="text" name="phone" value=""><p>
          근무지:<input type="text" name="work" value=""><p>
          <input type="submit" name="가입" value="가입"><p>
        </form>
      </div>
    </article>
  </body>
</html>



<?php ?>
