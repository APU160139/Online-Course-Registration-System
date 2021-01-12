
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/registration.css">
<link rel="stylesheet" href="css/style.css">
<style>
  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1;}
  
  input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
  }
  
  button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  button:hover {
    opacity: 0.8;
  }
  
  .cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
  }
  
  .imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
  }
  
  img.avatar {
    width: 40%;
    border-radius: 50%;
  }
  form{
    margin-left: 80px;
    margin-right: 80px;
  }
  .container {
    padding: 16px;
  }
  
  span.psw {
    float: right;
    padding-top: 16px;
  }
  
  /* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
  }
  </style>

</head>
    <div class="header">
    <img src="Image/web.jpg" alt="Trulli" width="900" height="150">   
   </div>

<body>
<div class="content">
      <div class="topnav">
            <a href="Home page.php">Instruction </a>
            <a href="registration.php">Registration</a>
            <a href="PAY.php">Payment</a>
            <a class="active" href="#Login">Login</a>
          </div>
          
          <div style="height: 350px;
          width: 900px;
          padding-top: 50px;
          padding-left:15px;
          padding-right:15px;
          background-color: powderblue">
            
           

<form method="POST" action="">


  
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" name="submit">Login</button>
    <h4 class="text-right">Forgot <a>Password?</a></h4>
     

  
 
</form>
            
          </div>
          <?php
          session_start();
$DB="registration";
$USER="root";
$PASSWORD="";
$HOST="localhost";
$connect = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
if(isset($_POST['submit'])) {
    $Email = $_POST['uname'];
    $Password = $_POST['psw'];
   
    $query="select * from all_information where email='$Email' && password='$Password'";
    $data=mysqli_query($connect, $query);
    $total = mysqli_num_rows($data);
    if($total==1) {
        $_SESSION['mail']= $Email;
        $_SESSION['pass']= $Password;
        header('location: Profile.php');
    } 
    if(($Email=="apucsejust@gmail.com") && ($Password=="757883")){
      header('location: admin.php');
    }
    
    else {
        echo "Invalid Email or Password";
    }
  }

?>

          <div style="height: 50px;
          width: 900px;
          background-color: rgb(43, 75, 75);
          color: white;
         
          text-align: center;
          padding-top: 20px;"
          
            <p> © 2019 Department of Computer Science and Engineering, Jashore University of Science and Technology</p>
          </div>

  

</body>
</html>
