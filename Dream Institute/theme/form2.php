<?php 
  $host = "localhost";
  $user = "dream";
  $password = "123456";
  $db = "dreamdb";

  $data = mysqli_connect($host,$user,$password,$db);
  if($data===false)
  {
    die("connection error");
  } 

if ($_SERVER["REQUEST_METHOD"]=="POST")
{
  $UserName=$_POST["UserName"];
  $Password=$_POST["Password"];

  $sql="select * from dreamtb where UserName='".$UserName."'AND Password='".$Password."'";

  $result=mysqli_query($data,$sql);

  $row=mysqli_fetch_array($result);

  if($row["userType"]=="user")

    {
       header("location:userlogin.html");

    }

  elseif($row["userType"]=="admin")
    {
      header("location:adminpage.html");
    }
    
  else
    {
      header("location:successpage.html");
    
    }

}

?>