<meta charset="utf-8">

<?php
$id = $_GET["id"];

     $con = mysqli_connect('localhost', 'rosalia94', 'k201313709*', 'rosalia94');
     $sql = "select * from lotte where id='$id'";
     $result = mysqli_query($con, $sql);
     $row=mysqli_fetch_array($result);
     //$num_record = mysqli_num_rows($result);


     if($row){
       echo "<script charset='utf-8'>
        alert('$id'+'는 이미 존재하는 아이디입니다.');
       </script>";
     } else {
       echo "<script charset='utf-8'>
        alert('$id'+'는 사용가능한 아이디입니다.');
       </script>";
     }

     mysqli_close($con);

     echo "<script charset='utf-8'>
      location.href='signin.php';
     </script>";

 ?>
