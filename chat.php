<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/style.css">

</head>
<div class="header">
<img src="Image/web.jpg" alt="Trulli" width="900" height="150">

</div>
<body>
    <div class="content">
        <div class="topnav">
                <a class="active" href="#Instruction">chat</a>
                <a  href="admin.php">payment Ensure</a>
                
            </div>
            
         <div style="height:450px;
            width: 900px;
            padding-top:  5px;
            padding-left: 40px;
            padding-right: 10px;
            padding-bottom:  20px;
            background-color: powderblue" >





<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>Chat</h1>
    <select name="designation" class="textfield02" id="designation">
        <option value="0" selected="selected" >Chat With Id No:</option>
        <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option>
    </select>

    
    <textarea placeholder="Type message.." name="msg" required></textarea>

    <button type="submit" class="btn">Send</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</div>
</div>

</body>
<footer style="height: 50px;
width: 900px;
background-color: rgb(43, 75, 75);
color: white;
margin-left: 225px;
text-align: center;
padding-top: 20px;"

  <p> © 2019 Department of Computer Science and Engineering, Jashore University of Science and Technology</p>
</footer>
</html>
