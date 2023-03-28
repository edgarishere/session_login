<?php  session_start();   // session starts with the help of this function 


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 
                              // true then header redirect it to the home page directly 
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
     $a = $_POST['unm'];
     $b = $_POST['pas'];
	
	$conn = mysqli_connect("localhost","root","","dbnm");
	$sql= "select * from `tbnm` where `colunm`='$a' and `colpas`='$b'";
	$res = mysqli_query($conn,$sql);
	$count=mysqli_num_rows($res);
      if($count > 0)  
         {                                     

          $_SESSION['use']=$user;
      header('location:home.php');
        }

        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

     
    <input type="text" placeholder="UserName" name="unm" >
  
    <input type="password" placeholder="PassWord" name="pas">
	<input type="submit" name="login" value="LOGIN">
</form>

</body>
</html>
