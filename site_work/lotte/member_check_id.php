<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      a{display:inline-block; width:100%; text-align:center; text-decoration:none; font-size:50px; font-weight:bold; color:red;}
    </style>
  </head>
  <body>
    <h3>아이디 중복체크</h3>
    <p>
      <?php
      $id = $_GET["id"];

       if (!$id)
       {
         echo("<li>아이디를 입력해 주세요!</li>");
       }
         else{
           $con = mysqli_connect('localhost', 'rosalia94', 'k201313709*', 'rosalia94');
           $sql = "select * from lotte where id='$id'";
           $result = mysqli_query($con, $sql);
           $num_record = mysqli_num_rows($result);

          if ($num_record){
              echo "<li>".$id." 중복된 아이디 입니다.</li>";
              echo "<li>다른 아이디를 사용해 주세요!</li>";

          }
         else
         {
           echo"<li>".$id." 사용가능한 아이디 입니다.</li>";
         }

         mysqli_close($con);
         }

       ?>

    </p>

    <a href="#" onclick="self.close()">확인</a>
  </body>
</html>
