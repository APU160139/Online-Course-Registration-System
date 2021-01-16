<?php
         
         $DB="registration";
         $USER="root";
         $PASSWORD="";
         $HOST="localhost";
         $connect = mysqli_connect($HOST, $USER, $PASSWORD, $DB);
         if (!$connect) {
             echo "Connection failed";
         }
         if($connect){
         echo "connected";
         }
         if(isset($_POST['submit'])) {
             $id = $_POST['aid'];
             $number = $_POST['rnum'];
             
             $filename= $_FILES["rphot"]["name"];
             $tempname= $_FILES["rphot"]["tmp_name"];
             $folder="sign/".$filename;
             move_uploaded_file($tempname,$folder);
             
             $quer="INSERT INTO retake (id,recipt,recphoto) VALUES('$id','$number','$folder')";
                
             $data=mysqli_query($connect,$quer);
             if($data){
                 echo"photo inserted into database";
             }
            
            }
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
.col-75 {
  padding: 0 16px;
}

</style>


</head>

<div class="header">
<img src="Image/web.jpg" alt="Trulli" width="900" height="150">    
</div>

<body>
  

<div class="content">
      
            <a href="Home page.php">Instruction </a>
            <a href="Registration.php">Registration</a>
            <a class="active" href="#Payment">Payment</a>
            <a href="login.php">Login</a>
          
          <div style="height: 400px;
          width: 900px;
          padding-top: 50px;
          background-color: powderblue">
          
          <div>
          <div class="rows">
            <div class="col-75">
              <div class="container">
                <form style="height: 240px;
                width: 835px;
                padding-top: 0px;
                background-color: rgb(247, 215, 215);border:15px" action="" method="post" enctype="multipart/form-data" >
                
                      <h3 style="background-color: rgb(201, 198, 199); text-align: center">Retake Fee</h3>
                      
                      <label for="cname">Application id</label>
                      <br>
                      <input type="text" id="aid" name="aid">
                      <br>
                      <label for="cname">Bank Recipt Number</label>
                      <br>
                      <input type="text" id="rnum" name="rnum">
                      <br>
                      <label for="ccnum">Bank Recipt Photos</label>
                      <input type="file" id="rphot" name="rphot">
                      <div >
                      <input type="submit" value="submit" name="submit" style=" background-color: #4CAF50;
                      color: white;
                      padding: 12px;
                      margin: 10px 0;
                      border: none;
                      width: 92.8%;
                      border-radius: 3px;
                      cursor: pointer;
                      font-size: 17px;"> 
                      </div> 

                      
                      </form>   
                     
                          </div>
                        </div>  
                      </div> 
                    </div>
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
