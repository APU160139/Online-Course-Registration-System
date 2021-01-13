<?php
session_start();
$DB="registration";
$USER="root";
$PASSWORD="";
$HOST="localhost";
$connect = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
if (!$connect) {
    echo "Connected failed";
}
else{
  echo " ";
}
$mail= $_SESSION['mail'];
$pass = $_SESSION['pass'];
$query="select * from all_information where email='$mail' and password = '$pass'";
$qry="select id from all_information where email='$mail' and password = '$pass'";

      $da=mysqli_query($connect, $qry);
      $tot = mysqli_num_rows($da);
      $re = mysqli_fetch_assoc($da);

      $id =  $re['id']; 
      





    $data=mysqli_query($connect, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
   
    if(isset($_POST['submit'])){
      $filename= $_FILES["Upload"]["name"];
      $tempname= $_FILES["Upload"]["tmp_name"];
      $folder="sign/".$filename;
      move_uploaded_file($tempname,$folder);
      
      
         $quer="INSERT INTO photo (photo,aid) VALUES('$folder','$id')";
        
          $data=mysqli_query($connect,$quer);
          if($data){
              echo"";
          }
      
         
    
      }



      $qr="select * from photo where aid='$id'";
    
      $dat=mysqli_query($connect, $qr);
      $tota = mysqli_num_rows($dat);
      $res = mysqli_fetch_assoc($dat);
      
      
    
    

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/registration.css">
<link rel="stylesheet" href="css/style.css">
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
form{
    border:5px;
    margin-top: 10px;
    margin-right: 80px;
  }
  h4{
    text-color:#dddddd;
  }
  form.groove {border-style: groove;}
</style>

</head>
    <div class="header">
    <img src="web.jpg" alt="Trulli" width="900" height="150">
    
</div>

<body>
<div class="content">
      <div class="topnav">
            <a href="Home page.html">Instruction </a>
            <a href="register.html">Registration</a>
            <a href="#Payment">Payment</a>
            <a class="active" href="#Login">Login</a>
          </div>
          
          <div style="height: 1150px;
          width: 900px;
          padding-top: 50px;
          padding-left:15px;
          padding-right:15px;
          background-color: powderblue">



          <div style="text-align: right; padding-right:80px "><img src="<?php echo $res['photo']; ?>" width="150" /></div>
          <h3>Applicant Id : <?php echo $result['id']; ?></h3>
                    <p> <strong>Applicant's Name: </strong> <?php echo $result['Applicant_Name']; ?></p>
                    <p> <strong>Father's Name: </strong> <?php echo $result['Father_Name']; ?></p>
                    <p> <strong>Mother's Name: </strong> <?php echo $result['Mother_Name']; ?></p>
                    <p> <strong>Date of Birth : </strong> <?php echo $result['Birth_Day']; ?>.<?php echo $result['Birth_Month']; ?>.<?php echo $result['Birth_Year']; ?></p>
                    <p> <strong>Mobile No:   </strong> <?php echo $result['phone']; ?></p>
                    <p> <strong>E-mail:   </strong> <?php echo $result['email']; ?></p>
                    
                    <h3>Academic Information</h3>
                    <p> <strong>Department Name: </strong> <?php echo $result['department']; ?></p>
                    <p> <strong>Roll No: </strong> <?php echo $result['roll']; ?></p>
                    <p> <strong>Registration No: </strong> <?php echo $result['reg']; ?></p>
                    <p> <strong>Year: </strong> <?php echo $result['year']; ?><strong>   </strong><strong>Semester: </strong><?php echo $result['semester']; ?></p>
                    <p> <strong>Session: </strong> <?php echo $result['session']; ?></p>

                    <h4>Registered Course</h4>
                                
                            
                    <table>
  <tr>
    <th>Course Code</th>
    <th>Course Name</th>
    
  </tr>
  <tr>
    <td><?php echo $result['cc1']; ?></td>
    <td><?php echo $result['cn1']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc2']; ?></td>
    <td><?php echo $result['cn2']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc3']; ?></td>
    <td><?php echo $result['cn3']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc4']; ?></td>
    <td><?php echo $result['cn4']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc5']; ?></td>
    <td><?php echo $result['cn5']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc6']; ?></td>
    <td><?php echo $result['cn6']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc7']; ?></td>
    <td><?php echo $result['cn7']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc8']; ?></td>
    <td><?php echo $result['cn8']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc9']; ?></td>
    <td><?php echo $result['cn9']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc10']; ?></td>
    <td><?php echo $result['cn10']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc11']; ?></td>
    <td><?php echo $result['cn11']; ?></td>
    
  </tr>
  <tr>
    <td><?php echo $result['cc12']; ?></td>
    <td><?php echo $result['cn12']; ?></td>
    
  </tr>
 
</table>

<form class="groove" action="" method="post" enctype="multipart/form-data">
    
    <input type="file" name="Upload" id="Upload">
    <input type="submit" value="Upload Image" name="submit">
</form>


    
            
          </div>

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
