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

$query="select * from reg";





    $data=mysqli_query($connect, $query);
    $total = mysqli_num_rows($data);
    $result = mysqli_fetch_assoc($data);
    
      

    
    

?>


<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/style.css">
</head>
    <div class="header">
    <img src="web.jpg" alt="Trulli" width="900" height="150">
    
</div>

<body>
  

<div class="content">
      <div class="topnav">
            <a href="chat.php">chat</a>
            <a class="active" href="#Registration">payment Ensure</a>
            
          </div>
          
          <div style="height: auto;
          width: 900px;
          padding-top:  10px;
          padding-left: 10px;
          padding-right: 10px;
          padding-bottom:  20px;
          background-color: powderblue">

           <h4 style="color:Green;"><strong>Payment List: </strong></h4>
          
          <table border="1" width="100%"  >
            <tr>
              <td style="font-weight: bold; width=25%;text-align: center;">S.I</td>
              <td style="font-weight: bold; width=35%;text-align: center;">Id</td>
              <td style="font-weight: bold; width=25%;text-align: center;">Bank Recipt. Number</td>
              <td style="font-weight: bold; width=25%;text-align: center;">Register fee</td>
              <td style="font-weight: bold; width=25%;text-align: center;">Payment Ensure</td>
              <td style="font-weight: bold; width=25%;text-align: center;">Status</td>
              
            </tr>

            
            <tr>
              <td align="center"">1</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Unpaid</td>
            </tr>
            <tr>
              <td align="center"">2</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Paid</td>
              </tr>
              <tr>
              <td align="center"">3</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Unpaid</td>
            </tr>
            <tr>
              <td align="center"">4</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Paid</td>
              </tr>
              <tr>
              <td align="center"">5</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Unpaid</td>
            </tr>
            <tr>
              <td align="center"">6</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Paid</td>
              </tr>
              <tr>
              <td align="center"">7</td>
              <td align="center"><?php echo $result['id']; ?></td>
              <td align="center"><?php echo $result['recipt']; ?></td>
              <td align="center"><img src="<?php echo $result['recphoto']; ?>" width="150"</td>
              <td align="center"><button type="button" style="background-color:Green; color:White;margin-right:10px" >Paid</button><button type="button" style="background-color:Red; color:White;" >Un-Paid</button></td>
              <td align="center"">Paid</td>
              </tr>
          </table>
          

          </div>
          <footer style="height: 50px;
          width: 900px;
          background-color: rgb(43, 75, 75);
          color: white;
         
          text-align: center;
          padding-top: 20px;"
          
            <p> © 2019 Department of Computer Science and Engineering, Jashore University of Science and Technology</p>
</footer>
        </body>
</html>
