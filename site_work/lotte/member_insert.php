


 <?php

 $id = $_POST["fill_id"];
 $pass = $_POST["fill_password"];
 $name = $_POST["fill_name"];
 $email1 = $_POST["fill_email1"];
 $email2 = $_POST["fill_email2"];

   $email = $email1."@".$email2;
   $regist_day = date("Y-m-d (H:i)");

   $con = mysqli_connect('localhost', 'rosalia94', 'k201313709*', 'rosalia94');

   $sql = "insert into lotte(id, pass, name, email, regist_day)";
   $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day')";

   mysqli_query($con, $sql);
   mysqli_close($con);

   echo "
     <script>
       location.href='login.php';
     </script>
   ";

 ?>
