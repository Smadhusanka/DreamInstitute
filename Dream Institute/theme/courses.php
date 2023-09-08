<?php include_once('php\form.php'); ?>

<?php

 //define variables and set empty
  $FullNameErr = $AddressErr = $SchoolErr = $AgeErr = $GradeErr = $GenderErr = $ContactErr = $UserNameErr = $PasswordErr = $ComformPasswordErr = "";
  $FullName = $Address = $School = $Age = $Grade = $Gender = $Contact = $UserName = $Password = $ComformPassword = "";

 
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{  
        if (empty($_POST["FullName"]))
          {
             $FullNameErr = "Name is required";
          }
        else
        {
          $FullName = input_data($_POST["FullName"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$FullName))
              {
                $FullNameErr = "Only alphaberts allowed";
              }
          if($_POST["FullName"] == " ") 
              {
                $FullNameErr = "white space error";
              }   
        }

        if (empty($_POST["Address"]))
        {
         $AddressErr = "Address is required";
        }
        else
        {
          $Address = input_data($_POST["Address"]);
          if (!preg_match("/^[a-zA-Z0-9 ,:.]*$/",$Address))
              {
                $AddressErr = "Only alphaberts and numbers are allowed";
              }
               
          if($_POST["Address"] == " ") 
              {
                $AddressErr = "white space error";
              }      
        }

         if (empty($_POST["School"]))
          {
             $SchoolErr = "School is required";
          }
        else
        {
          $School = input_data($_POST["School"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$School))
              {
                $SchoolErr = "Only alphaberts are allowed";
              }
           if($_POST["School"] == " ") 
              {
                $SchoolErr = "white space error";
              }     
        }

        if (empty($_POST["Age"]))
        {
          $AgeErr = "Age is required";
        }
        else
        {
          $Age = input_data($_POST["Age"]);

          if (!preg_match("/^[0-9]*$/",$Age))
          {
            $AgeErr = "Only numeric values are allowed.";
          }

          if (strlen($Age)!= 2)
          {
            $AgeErr = "Age can must contain 2 digits.";
          }
          
          if (($_POST["Age"]) < 17 || ($_POST["Age"]) > 25)
          {
            $AgeErr = "18-24 ages are allowed";
          }

          if($_POST["Age"] == " ") 
              {
                $AgeErr = "white space error";
              }
        }

      if (empty($_POST["Grade"]))
        {
          $GradeErr = "Grade is required";
        }
        else
        {
          $Grade = input_data($_POST["Grade"]);

          if (!preg_match("/^[0-9]*$/",$Grade))
          {
            $GradeErr = "Only numeric values are allowed.";
          }

          if (strlen($Grade)!= 2)
          {
            $GradeErr = "Grade can must contain 2 digits.";
          }

          if (($_POST["Grade"]) < 11 || ($_POST["Grade"]) > 14)
          {
            $GradeErr = "You can add Grade 12 or 13.";
          }


          if($_POST["Grade"] == " ") 
              {
                $GradeErr = "white space error";
              }

        }

        if (empty($_POST["Gender"]))
          {
            $GenderErr = "Gender is required.";
          }
        else
          {
            $Gender = input_data($_POST["Gender"]);
          }


        if (empty($_POST["Contact"]))
        {
          $ContactErr = "Contact is required";
        }
        else
        {
          $Contact = input_data($_POST["Contact"]);

          if (!preg_match("/^[0-9]*$/",$Contact))
          {
            $ContactErr = "Only numeric values are allowed.";
          }
           if (strlen($Contact) != 10)
          {
            $ContactErr = "Contact number can must contain 10 digits.";
          }

          if($_POST["Contact"] == " ") 
              {
                $ContactErr = "white space error";
              }
        }

        if (empty($_POST["UserName"]))
          {
             $UserNameErr = "UserName is required";
          }
        else
        {
          $UserName = input_data($_POST["UserName"]);
          if (!preg_match("/^[a-zA-Z0-9]*$/",$UserName))
              {
                $UserNameErr = "Only alphaberts and numbers are allowed";
              }

          if($_POST["UserName"] == " ") 
              {
                $UserNameErr = "white space error";
              }

        }

        if (empty($_POST["Password"]))
          {
             $PasswordErr = "Password is required";
          }
        else
        {
          $Password = input_data($_POST["Password"]);
          if (!preg_match("/^[a-zA-Z0-9!@#$%^&*]*$/",$Password))
              {
                $PasswordErr = "alphaberts,numbers and symbles are allowed";
              }
          if($_POST["Password"] == " ") 
              {
                $PasswordErr = "white space error";
              }
        }

        if (empty($_POST["ComformPassword"]))
          {
             $ComformPasswordErr = "ComformPassword is required";
          }
        else
        {
        
          if (($_POST["Password"]) != ($_POST["ComformPassword"]))
              {
                $ComformPasswordErr = "comform password doesn't match";
              }
          if($_POST["ComformPassword"] == " ") 
              {
                $ComformPasswordErr = "white space error";
              }    
        }

       
        if(isset($_POST['submit']))
        {

           if($FullNameErr == "" && $AddressErr == "" && $SchoolErr == "" && $AgeErr == "" && $GradeErr == "" && $GenderErr == "" && $ContactErr == "" && $UserNameErr == "" && $PasswordErr == "" && $ComformPasswordErr == "")
          {
            $FullName = $_POST['FullName'];
            $Address = $_POST['Address'];
            $School = $_POST['School'];
            $Age = $_POST['Age'];
            $Grade = $_POST['Grade'];
            $Gender = $_POST['Gender'];
            $Subject= $_POST['Subject'];
            $Contact = $_POST['Contact'];
            $UserName = $_POST['UserName'];
            $Password = $_POST['Password'];
            $ComformPassword = $_POST['ComformPassword'];

      

            $query = " INSERT INTO dreamtb(fullname,address,school,age,grade,gender,subject,contact,UserName,Password,ComformPassword) Values ('$FullName','$Address','$School','$Age','$Grade','$Gender','$Subject','$Contact','$UserName','$Password','$ComformPassword')";

            $result = mysqli_query($conn,$query);

            header("location:registersucess.html");

          }   
          else
            {
              echo "<script>alert('Registeration Unsuccessfull! please follow the form rules!');</script>"; 
            }
          
        }
}
function input_data($data)
        {
          $data = trim($data);
          $data = stripcslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }

?>

<?php

$NameErr = $descriptionErr = $mobileErr = $UnameErr = $PwErr = $CpwErr = "";
 $Name = $description = $mobile = $Uname = $Pw = $Cpw = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["Name"]))
          {
             $NameErr = "Name is required";
          }
        else
        {
          $Name = ckeck($_POST["Name"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$Name))
              {
                $NameErr = "Only alphaberts allowed";
              }
          if($_POST["Name"] == " ") 
              {
                $NameErr = "white space error";
              }
        }

         if (empty($_POST["description"]))
          {
             $descriptionErr = "description is required";
          }
        else
        {
          $description = ckeck($_POST["description"]);
          if (!preg_match("/^[a-zA-Z ]*$/",$description))
              {
                $descriptionErr = "Only alphaberts allowed";
              }
          if($_POST["description"] == " ") 
              {
                $descriptionErr = "white space error";
              }    
        }

         if (empty($_POST["mobile"]))
        {
          $mobileErr = "mobile number is required";
        }
        else
        {
          $mobile = ckeck($_POST["mobile"]);

          if (!preg_match("/^[0-9]*$/",$mobile))
          {
            $mobileErr = "Only numeric values are allowed.";
          }
           if (strlen($mobile) != 10)
          {
            $mobileErr = "Contact number can must contain 10 digits.";
          }
          if($_POST["mobile"] == " ") 
              {
                $mobileErr = "white space error";
              }
        }

        if (empty($_POST["Uname"]))
          {
             $UnameErr = "UserName is required";
          }
        else
        {
          $Uname = ckeck($_POST["Uname"]);
          if (!preg_match("/^[a-zA-Z0-9]*$/",$Uname))
              {
                $UnameErr = "Only alphaberts and numbers are allowed";
              }
          if($_POST["Uname"] == " ") 
              {
                $UnameErr = "white space error";
              }
        }

        if (empty($_POST["Pw"]))
          {
             $PwErr = "Password is required";
          }
        else
        {
          $Pw = ckeck($_POST["Pw"]);
          if (!preg_match("/^[a-zA-Z0-9!@#$%^&*]*$/",$Pw))
              {
                $PwErr = "alphaberts,numbers and symbles are allowed";
              }
          if($_POST["Pw"] == " ") 
              {
                $PwErr = "white space error";
              }    
        }

        if (empty($_POST["Cpw"]))
          {
             $CpwErr = "ComformPassword is required";
          }
        else
        {
        
          if (($_POST["Pw"]) != ($_POST["Cpw"]))
              {
                $CpwErr = "comform password doesn't match";
              }
          if($_POST["Cpw"] == " ") 
              {
                $CpwErr = "white space error";
              }
        }

        if(isset($_POST['submit2']))
        {
          if($NameErr == "" && $descriptionErr == "" && $mobileErr == "" && $UnameErr == "" && $PwErr == "" && $CpwErr == "")

              {
                $Name = $_POST['Name'];
                $Sstream = $_POST['Sstream'];
                $Sub = $_POST['Sub'];
                $description = $_POST['description'];
                $mobile = $_POST['mobile'];
                $Uname = $_POST['Uname'];
                $Pw = $_POST['Pw'];
                $Cpw = $_POST['Cpw'];

                $query2 = " INSERT INTO stafftb(name,subjectStream,subject,description,contactNumber,UserName,Password,ComformPassword) Values ('$Name','$Sstream','$Sub','$description','$mobile','$Uname','$Pw','$Cpw')";

                $result = mysqli_query($conn,$query2);

                header("location:registersucess.html");

              }
          else
            {
              echo "<script>alert('Registeration Unsuccessfull! please follow the form rules!');</script>"; 
            }
            

        }

}

function ckeck($data)
        {
          $data = trim($data);
          $data = stripcslashes($data);
          $data = htmlspecialchars($data);
          return $data;
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
	================================================== -->
  <meta charset="utf-8">
  <title>Dream Institute-Staff</title>

  <!-- Mobile Specific Metas
	================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Educenter HTML Template v1.0">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <!-- preloader start -->
  <div class="preloader">
    <img src="images/preloader.gif" alt="preloader">
  </div>
  <!-- preloader end -->

<!-- header -->
<header class="fixed-top header">
  <!-- top header -->
  <div class="top-header py-2 bg-white">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <a class="text-color mr-3" href=""><strong>CALL</strong> +94 6436132</a>
          <ul class="list-inline d-inline">
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href=""><i class="ti-facebook"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href=""><i class="ti-twitter-alt"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href=""><i class="ti-github"></i></a></li>
            <li class="list-inline-item mx-0"><a class="d-inline-block p-2 text-color" href=""><i class="ti-instagram"></i></a></li>
          </ul>
        </div>
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal" data-toggle="modal" data-target="#loginModal">login-students</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#loginModal2" data-toggle="modal" data-target="#loginModal2">login-teachers</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal" data-toggle="modal" data-target="#signupModal">register-students</a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="#signupModal2" data-toggle="modal" data-target="#signupModal2">register-teachers</a></li>
            <li class="list-inline-item"><a href="feedback.html" class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block">Feedback</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="index.php"><img src="images\dreaminstitute.png" width="100px" height="100px" alt="logo"></a>
        <font size="+3" color="white">Dream Institute</font>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item @@home">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item @@about">
              <a class="nav-link" href="about.php">Streams</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="courses.php">Staff</a>
            </li>
            <li class="nav-item @@events">
              <a class="nav-link" href="events.php">Time Table</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
        </div>
      </nav>
    </div>
  </div>
</header>
<!-- /header -->
<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register Form-Students</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="login">
              <form action="index.php" name="registerform" method="POST" class="row" id="registerform" autocomplete="off">
                  <div class="col-12">
                    <span class="error" style="color : #FF0000;"><?php echo $FullNameErr;?></span>
                      <input type="text" name="FullName" class="form-control mb-3" placeholder="FullName (Only alphaberts allowed)" id="Fullname" required="true" oninvalid="this.setCustomValidity('FullName is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                    <span class="error" style="color : #FF0000;"><?php echo $AddressErr;?></span>
                        <input type="text" name="Address" class="form-control mb-3" placeholder="Address (Only alphaberts and numbers allowed)" id="Address" required="true" oninvalid="this.setCustomValidity('Adress is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                    <span class="error" style="color : #FF0000;"><?php echo $SchoolErr;?></span>
                        <input type="text" name="School" class="form-control mb-3" placeholder="School (Only alphaberts allowed)" id="School" required="true" oninvalid="this.setCustomValidity('School is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                    </div>

                  <div class="col-12">
                     <span class="error" style="color : #FF0000;"><?php echo $AgeErr;?></span>
                        <input type="text" name="Age" class="form-control mb-3" placeholder="Age (Only numbers allowed)" id="Age" required="true" oninvalid="this.setCustomValidity('Age is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $GradeErr;?></span>
                        <input type="text" name="Grade" class="form-control mb-3" placeholder="Grade 12 or 13 (Only numbers allowed)" id="Grade" required="true" oninvalid="this.setCustomValidity('Grade is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  <br>
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $GenderErr;?></span>
                        <label>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label>male&nbsp;&nbsp;&nbsp;</label><input type="radio" name="Gender" value="male" placeholder="Gender" required="true">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <label>female&nbsp;&nbsp;&nbsp;</label><input type="radio" name="Gender" value="female" placeholder="Gender" required="true">
                  </div>

                  <div class="col-12">
                      <label>Subject Stream</label>
                        <select name="Subject" id="stream" required="true" style="width:100%; padding: 2px 15px;
                        margin: 8px 0;display: inline-block;border: 1px solid #ccc; border-radius: 4px; box-sizing:border-box;"class="form-control mb-3">
                            <option value="Art">Art</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Bio">Bio</option>
                            <option value="Maths">Maths</option>
                            <option value="Technology">Technology</option>
                        </select> 
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $ContactErr;?></span>
                        <input type="text" name="Contact" class="form-control mb-3" placeholder="Contact Number (Only numbers allowed)" id="Contact" required="true" oninvalid="this.setCustomValidity('Contact is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $UserNameErr;?></span>
                        <input type="text" name="UserName" class="form-control mb-3" placeholder="User Name (Only alphaberts and numbers allowed)" id="UserName" required="true" oninvalid="this.setCustomValidity('UserName is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $PasswordErr;?></span>
                        <input type="password" name="Password" class="form-control mb-3" placeholder="Password (alphaberts,numbers and symbles are allowed)" id="Password" required="true" oninvalid="this.setCustomValidity('Password is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>
                         
                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $ComformPasswordErr;?></span>
                        <input type="password" name="ComformPassword" class="form-control mb-3" placeholder="ComformPassword (Enter above password)" id="ComformPassword" required="true" oninvalid="this.setCustomValidity('Comform Password is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div>  
                      <button type="submit" name="submit" class="btn btn-primary">Register</button>&nbsp;&nbsp;
                      <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
              </form>
            </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="signupModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register Form-Teachers</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
              <div class="login">
              <form action="index.php" name="teachersform" method="POST" class="row" id="teachersform" autocomplete="off">
                  <div class="col-12">
                    <span class="error" style="color : #FF0000;"><?php echo $NameErr;?></span>
                      <input type="text" name="Name" class="form-control mb-3" placeholder="FullName (Only alphaberts allowed)" id="name" required="true" oninvalid="this.setCustomValidity('FullName is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <label>Subject Stream</label>
                        <select name="Sstream" id="Sstream" required="true" style="width:100%; padding: 2px 15px;
                        margin: 8px 0;display: inline-block;border: 1px solid #ccc; border-radius: 4px; box-sizing:border-box;"class="form-control mb-3">
                            <option value="Art">Art</option>
                            <option value="Commerce">Commerce</option>
                            <option value="Bio">Bio</option>
                            <option value="Maths">Maths</option>
                            <option value="Technology">Technology</option>
                        </select> 
                  </div>

                   <div class="col-12">
                      <label>Subject</label>
                        <select name="Sub" id="Sub" required="true" style="width:100%; padding: 2px 15px;
                        margin: 8px 0;display: inline-block;border: 1px solid #ccc; border-radius: 4px; box-sizing:border-box;"class="form-control mb-3">
                            <option value="Art">Art</option>
                            <option value="Buddhism">Buddhism</option>
                            <option value="Media">Communication & Media Studies</option>
                            <option value="Economics">Economics</option>
                            <option value="English">English</option>
                            <option value="Geography">Geography</option>
                            <option value="History">History</option>
                            <option value="Logic">Logic</option>
                            <option value="Political">Political Science</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Accounting">Accounting</option>
                            <option value="Business">Business</option>
                            <option value="StatisticsBusiness">Statistics Business</option>
                            <option value="StudiesEconomics">Studies Economics</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="BioSystemTechnology">Bio System Technology</option>
                            <option value="Biology">Biology</option>
                            <option value="Chemistry">Chemistry</option>
                            <option value="Physics">Physics</option>
                            <option value="ScienceforTechnology">Science for Technology</option>
                            <option value="CombineMathematics">Combine Mathematics</option>
                            <option value="HigherMathematics">Higher Mathematics</option>
                            <option value="Physics">Physics</option>
                            <option value="AgroTechnology">Agro Technology</option>
                            <option value="EngineeringTechnology">Engineering Technology</option>
                            <option value="GeneralInformationTechnology">General Information Technology</option>
                            <option value="Ict">Information & Communication Technology</option>
                        </select> 
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $descriptionErr;?></span>
                        <input type="text" name="description" class="form-control mb-3" placeholder="description-degree type (only alphaberts allowed)" id="description" required="true" oninvalid="this.setCustomValidity('description is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $mobileErr;?></span>
                        <input type="text" name="mobile" class="form-control mb-3" placeholder="Contact Number (Only numbers allowed)" id="mobile" required="true" oninvalid="this.setCustomValidity('Contact is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $UnameErr;?></span>
                        <input type="text" name="Uname" class="form-control mb-3" placeholder="User Name (Only alphaberts and numbers allowed)" id="Uname" required="true" oninvalid="this.setCustomValidity('UserName is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $PwErr;?></span>
                        <input type="password" name="Pw" class="form-control mb-3" placeholder="Password (alphaberts,numbers and symbles are allowed)" id="Pw" required="true" oninvalid="this.setCustomValidity('Password is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>
                         
                  <div class="col-12">
                      <span class="error" style="color : #FF0000;"><?php echo $CpwErr;?></span>
                        <input type="password" name="Cpw" class="form-control mb-3" placeholder="ComformPassword (Enter above password)" id="Cpw" required="true" oninvalid="this.setCustomValidity('Comform Password is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                  </div>

                  <div>  
                      <button type="submit" name="submit2" class="btn btn-primary">Register</button>&nbsp;&nbsp;
                      <button type="reset" class="btn btn-primary">Reset</button>
                  </div>
              </form>
            </div>
          </div>
      </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login-students</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="form2.php" method="POST" class="row" autocomplete="off">
                   <div class="col-12">
                      <input type="text" class="form-control mb-3" name="UserName" placeholder="username" required="true" oninvalid="this.setCustomValidity('UserName is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                    </div>
                    <div class="col-12">
                      <input type="password" class="form-control mb-3" name="Password" placeholder="Password" required="true" oninvalid="this.setCustomValidity('Password is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
               </form>
            </div> 
        </div>
    </div>
</div>
<div class="modal fade" id="loginModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login-teachers</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="form3.php" method="POST" class="row" autocomplete="off">
                   <div class="col-12">
                      <input type="text" class="form-control mb-3" name="UserName" placeholder="username" required="true" oninvalid="this.setCustomValidity('UserName is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                    </div>
                    <div class="col-12">
                      <input type="password" class="form-control mb-3" name="Password" placeholder="Password" required="true" oninvalid="this.setCustomValidity('Password is required')" onchange="try{setCustomValidity('')} catch(e) {}">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </div>
               </form>
            </div> 
        </div>
    </div>
</div>

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb mb-2">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="index.php">Home</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Our Teaching Staff</li>
        </ul>
        <p class="text-lighten mb-0">The information of the teachers related to each subject is given below.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<h3><center><u>Our teaching staff-Art</u></center></h3>

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\speaker-5.jpg" alt="teacherss5">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
        <h4 class="card-title">Art</h4>
        <p class="card-text mb-4"><b>Mr.Kashyapa Weliwatta</b><br>(BVA (SP)-UNIVERSITY OF COLOMBO MA.UNIVERSITY OF KELANIYA)</p>

        </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\speaker-6.jpg" alt="teacherss6">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href="course-single.html"></a></li>
        </ul>
        
          <h4 class="card-title">Buddhism</h4>
          <p class="card-text mb-4"><b>Mr.Madura Perera</b><br>(B.A. (University of Sri Jayawardenapura)<br>M.A - Sinhala (University of Kelaniya), M.A - Buddhist Studies (University of Kelaniya)</p>

        </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\speaker-7.jpg" alt="teacherss7">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Communication & Media Studies</h4>
          <p class="card-text mb-4"><b>Mr.Saman Wijesekara</b><br>[B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G. DIP (USJP),<br> EDU. P. G. DIP (EDUCATION) (COLOMBO)]</p>

        </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\1.jpg" alt="teachers1" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
              
        <h4 class="card-title">Geography</h4>
        <p class="card-text mb-4"><b>Mr.Nipun Wijayathilaka</b><br>Mr.Thisira Kumara Aththidiya<br>(BA. (SP). MA. UNIVERSITY OF KELANIYA)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\2.jpg" alt="teachers2" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Logic and Scientific Method</h4>
          <p class="card-text mb-4"><b>Mr.Ruwan Maliyadda</b><br>(BA. (SP). USJP PGDE.OUSL SLTS UNIVERSITY OF SRI JAYAWARDANAPURA)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\3.jpg" alt="teachers3" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>

        <h4 class="card-title">Political Science</h4>
        <p class="card-text mb-4"><b>Mr.Anura B Ekenayeka</b><br>(BA sp university of peradeniya)</p>

      </div>
    </div>
  </div>
</div>
<!-- /course list -->
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\4.jpg" alt="teachers4" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Sinhala</h4>
          <p class="card-text mb-4"><b>Mr.Asanka Samith Hettihewa</b><br>(B.A DIP MASS COMMUNICATION DIP. BUDDHISM DIP. LIBRARY & INFO SCIENCE)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\5.jpg" alt="teachers5" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Economics</h4>
          <p class="card-text mb-4"><b>Mr.Saman Wijesekara</b><br>[B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G. DIP (USJP),<br> EDU. P. G. DIP (EDUCATION) (COLOMBO)]</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\6.jpg" alt="teachers6" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Geography</h4>
          <p class="card-text mb-4"><b>Mr.Nipun Wijayathilaka</b><br>(Bachelor of Arts (Special) Geography)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\7.jpg" alt="teachers7" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>

        <h4 class="card-title">History</h4>
        <p class="card-text mb-4"><b>Mr.Thisira Kumara Aththidiya</b><br>(BA. (SP). MA. UNIVERSITY OF KELANIYA)</p>

      </div>
    </div>
  </div>
<!-- /course list -->
  </div>
</section>
<h3><center><u>Our teaching staff-Bio Sceince</u></center></h3>
<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\8.jpg" alt="teachers8" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Agriculture</h4>
          <p class="card-text mb-4"><b>Mr.Dummindha Pathirana</b><br>(B.Sc Agri/Dip BM)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\9.jpg" alt="teachers9" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Bio System Technology</h4>
          <p class="card-text mb-4"><b>Mr.Menaka Weerasuriya</b><br>(BSc. Agri (Sp) | Specialized in crop science | Faculty of Agriculture | University of Ruhuna)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\10.jpg" alt="teachers10" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Biology</h4>
          <p class="card-text mb-4"><b>Mr.Roshan Lakmal Wijesinghe</b><br>(BAMS – AYURVEDIC MEDICINE AND SURGERY UNIVERSITY OF COLOMBO)</p>

      </div>
    </div>
  </div>
   <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\11.jpg" alt="teachers11" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Chemistry</h4>
          <p class="card-text mb-4"><b>Mr.L.H. Anushka Indunil</b><br>(MBBS (UG) UNIVERSITY OF COLOMBO – FACULTY OF MEDICINE)</p>

      </div>
    </div>
  </div>
   <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\12.jpg" alt="teachers12" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Physics</h4>
          <p class="card-text mb-4"><b>Mr.Dulanjaya C. Gunawardana</b><br>(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)</p>

      </div>
    </div>
  </div>
   <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\13.jpg" alt="teachers13" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Science for Technology</h4>
          <p class="card-text mb-4"><b>Mr.Thilina Piyatissa</b><br>BSc [USJP], PG Degree [Reading - USJP])</p>

      </div>
    </div>
  </div>
<!-- /course list -->
  </div>
</section>

<h3><center><u>Our teaching staff-Maths</u></center></h3>


<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\14.jpg" alt="teachers14" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Chemistry</h4>
          <p class="card-text mb-4"><b>Mr.L.H. Anushka Indunil</b><br>(MBBS (UG) UNIVERSITY OF COLOMBO – FACULTY OF MEDICINE)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\15.jpg" alt="teachers15" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Combine Mathematics</h4>
          <p class="card-text mb-4"><b>Mr.Srihan Mapitigama</b><br>(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)</p>

        </div>
      </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\16.jpg" alt="teachers16" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Higher Mathematics</h4>
          <p class="card-text mb-4"><b>Mr.R.D.P. Sachithra</b><br>(BSC. DIP IN IT UNIVERSITY OF KELANIYA)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\17.jpg" alt="teachers17" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Physics</h4>
          <p class="card-text mb-4"><b>Mr.Dulanjaya C. Gunawardana</b><br>(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)</p>

      </div>
    </div>
  </div>
  <!-- /course list -->
  </div>
</section>

<h3><center><u>Our teaching staff-Commerce</u></center></h3>

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\18.jpg" alt="teachers18" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Accounting</h4>
          <p class="card-text mb-4"><b>Mr.Sudath Rohana</b><br>(B. COM (SPECIAL) CGPM (DIP) HRM (DIP) UNIVERSITY OF KELANIYA)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\19.jpg" alt="teachers19" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Business</h4>
          <p class="card-text mb-4"><b>Mr.Saman Wijesekara</b><br>(B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G. <br>DIP (USJP), EDU. P. G. DIP (EDUCATION) (COLOMBO))</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\20.jpg" alt="teachers20" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Studies Economics</h4>
          <p class="card-text mb-4"><b>Mr.Dulanjaya C. Gunawardana</b><br>(BSC. (HONS). ENGINEERING UNIVERSITY OF MORATUWA)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\21.jpg" alt="teachers21" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Statistics Business</h4>
          <p class="card-text mb-4"><b>Mr.Saman Wijesekara</b><br>(B. CO. SP. (SRI JAYAWARDANAPURA), WRI & COM. P.G.
          DIP (USJP), EDU. P. G. DIP (EDUCATION) (COLOMBO))</p>

      </div>
    </div>
  </div>
  <!-- /course list -->
  </div>
</section>

<h3><center><u>Our teaching staff-Technology</u></center></h3>

<!-- courses -->
<section class="section">
  <div class="container">
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\22.jpg" alt="teachers22" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Agro Technology</h4>
          <p class="card-text mb-4"><b>Mr.Dummindha Pathirana</b><br>(B.Sc Agri/Dip BM)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\23.jpg" alt="teachers23" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Engineering Technology</h4>
          <p class="card-text mb-4"><b>Mr.Pubudu Liyanage</b><br>(B Eng (Hons) in Mechanical Engineering)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\24.jpg" alt="teachers24" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">General Information Technology</h4>
          <p class="card-text mb-4"><b>Mr.Danilka Nishan</b><br>(Bsc. Physical ICT j'pura (ug), Bsc (honurs) in computer science (ug)</p>

      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="images\teachers\1234.jpg" alt="teachers1234" height="400px">
      <div class="card-body">
        <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i></li>
          <li class="list-inline-item"><a class="text-color" href=""></a></li>
        </ul>
        
          <h4 class="card-title">Information & Communication Technology</h4>
          <p class="card-text mb-4"><b>Mr.Danilka Nishan</b><br>Bsc. Physical ICT j'pura (ug), Bsc (honurs) in computer science (ug)</p>

      </div>
    </div>
  </div>
<!-- /course list -->
<!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>

<!-- footer -->
<footer>
 <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.php"><img class="img-fluid mb-4" src="images\dreaminstitute.png" width="100px" height="100px"alt="logo"></a>
          <font size="+3" color="white">Dream Institute</font>
          <ul class="list-unstyled">
            <li class="mb-2">NO:115/200,New bustand,Anuradhapura.</li>
            <li class="mb-2">+94 6436132</li>
            <li class="mb-2">+94 8088189</li>
            <li class="mb-2">+94 1234567</li>
            <li class="mb-2">www.dreaminstitute@gmail.com</li>
            <li class="mb-2">www.dreaminstitute.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5"></h4>
          <ul class="list-unstyled">
           <li class="mb-3"><a class="text-color" href=""></a></li>
           <li class="mb-3"><a class="text-color" href=""></a></li>
           <li class="mb-3"><a class="text-color" href="#!"></a></li>
           <li class="mb-3"><a class="text-color" href="#!"></a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5"></h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href=""></a></li>
            <li class="mb-3"><a class="text-color" href=""></a></li>
            <li class="mb-3"><a class="text-color" href=""></a></li>
            <li class="mb-3"><a class="text-color" href=""></a></li>
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">Links</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="index.php">Home</a></li>
            <li class="mb-3"><a class="text-color" href="about.php">Streams</a></li>
            <li class="mb-3"><a class="text-color" href="courses.php">Staff</a></li>
            <li class="mb-3"><a class="text-color" href="events.php">Time Table</a></li>
            <li class="mb-3"><a class="text-color" href="contact.php">Contact</a></li> 
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5"></h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href=""></a></li>
            <li class="mb-3"><a class="text-color" href=""></a></li>
            <li class="mb-3"><a class="text-color" href=""></a></li>
            <li class="mb-3"><a class="text-color" href=""></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright-->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            , designed & developed by <a href="" class="text-muted">S.Madhusanka</a>
          </p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href=""><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href=""><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href=""><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href=""><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- /footer -->

<!-- jQuery -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="plugins/bootstrap/bootstrap.min.js"></script>
<!-- slick slider -->
<script src="plugins/slick/slick.min.js"></script>
<!-- aos -->
<script src="plugins/aos/aos.js"></script>
<!-- venobox popup -->
<script src="plugins/venobox/venobox.min.js"></script>
<!-- filter -->
<script src="plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>
<script src="plugins/google-map/gmap.js"></script>

<!-- Main Script -->
<script src="js/script.js"></script>

</body>
</html>