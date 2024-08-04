<?php
 @include 'conn.php';
 if(isset($_POST['submit']))
 {
   $name = mysqli_real_escape_string($conn,$_POST['Username']);
   $email= mysqli_real_escape_string($conn,$_POST['email']);
   $pass= md5($_POST['Password']);
   $cpass=md5($_POST['cpassword']);
   $user_type=$_POST['user_type'];
   $select="SELECT * FROM user WHERE email='$email' && password='$pass'";
   $reslut=mysqli_query($conn,$select);
   if(mysqli_num_rows($result)>0)
   {
     $row=mysqli_fetch_array($result);
     if($row['user_type']=='company')
     {
        $_SESSION['company_name']=$row['name'];
        header('location:')
     }

   }
 };
 ?>