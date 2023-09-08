<?php  

$host = "localhost";
$user  = "dream";
$password = "123456";
$db = "dreamdb";

$data = mysqli_connect($host,$user,$password,$db);
  if($data===false)
  {
    die("connection error");
  }

if (isset($_POST['name']) && isset($_POST['message']))
   {

		function checkerror($data)
		{
       		$data = trim($data);
	   			$data = stripslashes($data);
	   			$data = htmlspecialchars($data);
	   			return $data;
		}

		$name = checkerror($_POST['name']);
		$message = checkerror($_POST['message']);

		if (empty($message) || empty($name)) {

				echo "<script>alert('name and massage required!');window.location.href='feedback.html';</script>";		
			}
		elseif(!preg_match("/^[a-zA-Z0-9 ,:.]*$/",$message)){

				echo "<script>alert('invalid character!');window.location.href='feedback.html';</script>";
		}

		elseif (!preg_match("/^[a-zA-Z ]*$/",$name)){

				echo "<script>alert('invalid character!');window.location.href='feedback.html';</script>";
			}

		elseif(($name) == " " || ($message) == " "){

			echo "<script>alert('white space!');window.location.href='feedback.html';</script>";
		}	

		else
	{

		$sql = "INSERT INTO  feedback(name, message) VALUES('$name', '$message')";
		$result = mysqli_query($data, $sql);

		if ($result)
		 {

				echo "<script>alert('feedback send successfully');window.location.href='feedback.html';</script>";			
		 }

		

	}

}
else
 {
	header("");
 }