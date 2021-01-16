<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/registration.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
      body{
                background-image: url(backg.jpg);
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
            <a class="active" href="#Registration">Registration</a>
            <a href="PAY.php">Payment</a>
            <a href="login.php">Login</a>
          </div>
          
          <div style="height: 400px;
          width: 900px;
          padding-top: 0.1px;
          background-color: powderblue">
          <form method ="post" action="" enctype="muitipart/form-data">
          <tr>
              <td align="left" valign="top" bgcolor="#E3E3E3">
                <table width="100%" border="0" cellpadding="5" cellspacing="0" class="black12" >
                    
                  <tbody><tr bgcolor="#A2A2A2">
                    <td width="23%" height="35" align="left" valign="middle">Personal Information</td>
                    <td width="7%" height="35" align="center" valign="middle">:</td>
                    <td width="70%" height="35" align="left" valign="middle">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                   
                    
                    </tr>
                  </tbody></table>
                </td>
                <input type="hidden" name="post_code" id="post_code" value="110">
                  </tr>
          
          
          <tr>
                    <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Applicant's Name<span class="red12">*</span></td>
                    <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                    <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="name" type="text" class="textfield03" id="name" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }"  required></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Father's Name<span class="red12">*</span></td>
                    <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                    <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="fathername" type="text" class="textfield03" id="fathername" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" required></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Mother's Name<span class="red12">*</span></td>
                    <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                    <td align="left" valign="middle" bgcolor="#E3E3E3"><input name="mothername" type="text" class="textfield03" id="mothername" onkeypress="return alpha(event,letters)" onblur="javascript:{this.value = this.value.toUpperCase(); }" required></td>
                  </tr>

              

                  <tr>
                    <td align="left" valign="middle" bgcolor="#DCDCDC" class="black12">Date of Birth<span class="red12">*</span></td>
                    <td align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
                    <td align="left" valign="middle" bgcolor="#DCDCDC"><span class="black12">Day</span>
                      <select name="b_day" class="textfield02" id="b_day">
                        <option value="0" selected="selected" >Select</option>
                  <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                      </select>
                      <span class="black12">Month</span>
                      <select name="b_month" class="textfield02" id="b_month">
                        <option value="0" selected="selected">Select</option>
                  
                  <option value="01">01 - January</option>
                  <option value="02">02 - February</option>
                  <option value="03">03 - March</option>
                  <option value="04">04 - April</option>
                  <option value="05">05 - May</option>
                  <option value="06">06 - June</option>
                  <option value="07">07 - July</option>
                  <option value="08">08 - August</option>
                  <option value="09">09 - September</option>
                  <option value="10">10 - October</option>
                  <option value="11">11 - November</option>
                  <option value="12">12 - December</option>
                      </select>
                      <span class="black12">Year</span>
                      <select name="b_year" class="textfield02" id="b_year">
                        <option value="0" selected="selected">Select</option>
                  <option value="1959">1959</option><option value="1960">1960</option><option value="1961">1961</option><option value="1962">1962</option><option value="1963">1963</option><option value="1964">1964</option><option value="1965">1965</option><option value="1966">1966</option><option value="1967">1967</option><option value="1968">1968</option><option value="1969">1969</option><option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option><option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option><option value="1980">1980</option><option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option><option value="2001">2001</option>
                      </select></td>
                  </tr>
                  <tr>
                    <td align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Gender<span class="red12">*</span></td>
                    <td align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                    <td align="left" valign="middle" bgcolor="#E3E3E3">
                  <label>
                          <input type="radio" name="sex" value="Male" id="sex_01">
                          <span class="black12">Male</span>
                </label>
                      <label>
                            <input type="radio" name="sex" value="Female" id="sex_02">
                            <span class="black12">Female</span>
                </label>
                </td>
                  </tr>
              <tr>
                    <td align="left" valign="middle" bgcolor="#DCDCDC" class="black12">Nationality<span class="red12">*</span></td>
                    <td align="center" valign="middle" bgcolor="#DCDCDC" class="black12">:</td>
                    <td align="left" valign="middle" bgcolor="#DCDCDC"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tbody><tr>
                    <td width="30%" align="left" valign="middle"><select name="nationality" class="textfield02" id="nationality">
                       
                      <option value="Bangladeshi" selected="selected">Bangladeshi</option>
                      <option value="Foreigner" selected="selected">Foreigner</option>
                      </select></td>
                    <td width="40%" align="right" valign="middle" class="black12">Religion<span class="red12">*</span> :</td>
                    <td width="25%" align="right" valign="middle"><select name="religion" class="textfield02" id="religion">
                          <option value="0" selected="selected">Select One</option>
                          <option value="Islam">Islam</option>
                          <option value="Hinduism">Hinduism</option>
                          <option value="Christianity">Christianity</option>
                          <option value="Buddhism">Buddhism</option>
                          <option value="Others">Others</option>
                        </select></td>
                    <td width="5%" align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </tbody></table></td>
                  </tr>
              
                  </td></tr>
                  <tr>
                    <td height="30" align="left" valign="middle" bgcolor="#E3E3E3" class="black12">Marital Status<span class="red12">*</span></td>
                    <td height="30" align="center" valign="middle" bgcolor="#E3E3E3" class="black12">:</td>
                    <td height="30" align="left" valign="middle" bgcolor="#E3E3E3"><label>
                      <input type="radio" name="mstatus" value="Married" id="mstatus_01">
                      <span class="black12">Married</span></label>
                      
                      <label>
                        <input type="radio" name="mstatus" value="Single" id="mstatus_02">
                        <span class="black12">Single</span>
                </label></td>
                  </tr>
            
        
          




                            
              <tr>
                  <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tbody><tr>
                          <td td="" height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Academic Information<span class="red12">*</span></td>
                        </tr>
                        <tr>
                            <td align="left" valign="middle">Department</td>
                            <td align="left" valign="middle"><select name="Department" class="textfield06a" id="Department">
                              <option value="0" selected="selected">Select One</option>
                              <option value="Computer Science and Engineering">Computer Science and Engineering</option><option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option><option value="Industrial and production Engineering">Industrial and production Engineering</option><option value="Chemical Engineering">Chemical Engineering</option><option value="Petrolium and Mining Engineering">Petrolium and Mining Engineering</option><option value="Biomedical Engineering">Biomedical Engineering</option><option value="Textile Engineering">Textile Engineering</option>

                         
                          </select></td>
                        </tr>
                        <tr>
                            <td width="37%" align="left" valign="middle">Year</td>
                            <td width="63%" align="left" valign="middle"><select name="Year" class="textfield06a" id="Year">
                              <option value="0" selected="selected">Select One</option>
             <option value="First">First</option><option value="Second">Second</option><option value="Third">Third</option><option value="Fourth">Fourth</option>
                          </select></td>
                        </tr>
                        <tr>
                            <td width="37%" align="left" valign="middle">Semester</td>
                            <td width="63%" align="left" valign="middle"><select name="Semester" class="textfield06a" id="Semester">
                              <option value="0" selected="selected">Select One</option>
             <option value="First">First</option><option value="Second">Second</option>
                          </select></td>
                        </tr>
                        <tr><td height="25" align="left" valign="middle">Roll</td>
                          <td height="25" align="left" valign="middle"><input name="Roll" type="text" class="textfield07b" id="Roll"required></td>
                          </tr>
                          <tr><td height="25" align="left" valign="middle">Reg</td>
                            <td height="25" align="left" valign="middle"><input name="Reg" type="text" class="textfield07b" id="Reg"required></td>
                            </tr>
                            <tr><td height="25" align="left" valign="middle">Session</td>
                              <td height="25" align="left" valign="middle"><input name="Session" type="text" class="textfield07b" id="Session"required></td>
                              </tr>
                
                      </tbody></table></td>
                      <td width="1%" align="left" valign="middle">&nbsp;</td>
                      <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tbody><tr>
                          <td td="" height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Register Information<span class="red12">*</span></td>
                        </tr>
                <tr>
                          <td width="47%" align="left" valign="middle">email</td>
                          <td width="53%" align="left" valign="middle">
                            <input name="email" type="text" class="textfield06" id="email" onkeypress="return alpha(event,letters)"required>
                          </td>
                        </tr>
                       
                          </td>
                        </tr>
                        
                        <tr>
                          <td align="left" valign="middle">password</td>
                          <td align="left" valign="middle">
                            <input name="password" type="text" class="textfield06" id="password" onkeypress="return alpha(event,letters)"required>
                          </td>
                        </tr>
                        <tr>
                          <td align="left" valign="middle">re-type Password</td>
                          <td align="left" valign="middle">
                            <input name="re_password" type="text" class="textfield06" id="re_password" onkeypress="return alpha(event,numbers)"required>
                          </td>
                        </tr>
                        <tr>
                            <td align="left" valign="middle">Phone No:</td>
                            <td align="left" valign="middle">
                              
                            <input name="phone1" type="text" class="textfield06" id="phone1" onkeypress="return alpha(event,numbers)"required>
                            <br>  
                          </td>
                            
                          </tr>
                          <tr>
                            <td align="left" valign="middle">Additional phone No:</td>
                            <td align="left" valign="middle">
                              
                            <input name="phone2" type="text" class="textfield06" id="phone2" onkeypress="return alpha(event,numbers)"required>
                            <br>  
                          </td>
                            
                          </tr>
                          
                        
                          
                      </tbody></table></td>
                      <td width="3%" align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </tbody></table></td>
                </tr>
                
            
                
          
              <tr>
                  <td colspan="3" align="left" valign="middle" bgcolor="#DCDCDC" class="black12"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody><tr>
                      <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tbody><tr>
                          <td td="" height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Course Code<span class="red12">*</span></td>
                        </tr>
                <tr>
                          <td width="47%" align="left" valign="middle">Course Code : 01</td>
                          <td width="53%" align="left" valign="middle">
                            <input name="cc1" type="text" class="textfield06" id="cc2" onkeypress="return alpha(event,letters)"required>
                          </td>
                        </tr>
                        <tr>
                            <td width="47%" align="left" valign="middle">Course Code : 02</td>
                            <td width="53%" align="left" valign="middle">
                              <input name="cc2" type="text" class="textfield06" id="cc2" onkeypress="return alpha(event,letters)"required>
                            </td>
                          </tr>
                          <tr>
                              <td width="47%" align="left" valign="middle">Course Code : 03</td>
                              <td width="53%" align="left" valign="middle">
                                <input name="cc3" type="text" class="textfield06" id="cc3" onkeypress="return alpha(event,letters)"required>
                              </td>
                            </tr>
                            <tr>
                                <td width="47%" align="left" valign="middle">Course Code : 04</td>
                                <td width="53%" align="left" valign="middle">
                                  <input name="cc4" type="text" class="textfield06" id="cc4" onkeypress="return alpha(event,letters)"required>
                                </td>
                              </tr>
                              <tr>
                                  <td width="47%" align="left" valign="middle">Course Code : 05</td>
                                  <td width="53%" align="left" valign="middle">
                                    <input name="cc5" type="text" class="textfield06" id="cc5" onkeypress="return alpha(event,letters)"required>
                                  </td>
                                </tr>
                                <tr>
                                    <td width="47%" align="left" valign="middle">Course Code : 06</td>
                                    <td width="53%" align="left" valign="middle">
                                      <input name="cc6" type="text" class="textfield06" id="cc6" onkeypress="return alpha(event,letters)"required>
                                    </td>
                                  </tr>
                                  <tr>
                                      <td width="47%" align="left" valign="middle">Course Code : 07</td>
                                      <td width="53%" align="left" valign="middle">
                                        <input name="cc7" type="text" class="textfield06" id="cc7" onkeypress="return alpha(event,letters)"required>
                                      </td>
                                    </tr>
                                    <tr>
                                        <td width="47%" align="left" valign="middle">Course Code : 08</td>
                                        <td width="53%" align="left" valign="middle">
                                          <input name="cc8" type="text" class="textfield06" id="cc8" onkeypress="return alpha(event,letters)"required>
                                        </td>
                                      </tr>
                                      <tr>
                                          <td width="47%" align="left" valign="middle">Course Code : 09</td>
                                          <td width="53%" align="left" valign="middle">
                                            <input name="cc9" type="text" class="textfield06" id="cc9" onkeypress="return alpha(event,letters)">
                                          </td>
                                        </tr>
                                        <tr>
                                            <td width="47%" align="left" valign="middle">Course Code : 10</td>
                                            <td width="53%" align="left" valign="middle">
                                              <input name="cc10" type="text" class="textfield06" id="cc10" onkeypress="return alpha(event,letters)">
                                            </td>
                                          </tr>
                                          <tr>
                                              <td width="47%" align="left" valign="middle">Course Code : 11</td>
                                              <td width="53%" align="left" valign="middle">
                                                <input name="cc11" type="text" class="textfield06" id="cc11" onkeypress="return alpha(event,letters)">
                                              </td>
                                            </tr>
                        
                                            <tr>
                                                <td width="47%" align="left" valign="middle">Course Code : 12</td>
                                                <td width="53%" align="left" valign="middle">
                                                  <input name="cc12" type="text" class="textfield06" id="cc12" onkeypress="return alpha(event,letters)">
                                                </td>
                                              </tr>
                        
                      </tbody></table></td>
                      <td width="1%" align="left" valign="middle">&nbsp;</td>
                      <td width="48%" align="left" valign="middle" class="bdr02"><table width="100%" border="0" cellpadding="3" cellspacing="0" class="black12">
                        <tbody><tr>
                          <td td="" height="25" colspan="2" align="left" valign="middle" bgcolor="#A2A2A2" class="black12">Course Name<span class="red12">*</span></td>
                        </tr>
                <tr>
                          <td width="47%" align="left" valign="middle">Course Name:01</td>
                          <td width="53%" align="left" valign="middle">
                            <input name="cn1" type="text" class="textfield06" id="cn1" onkeypress="return alpha(event,letters)"required>
                          </td>
                        </tr>
                        <tr>
                            <td width="47%" align="left" valign="middle">Course Name:02</td>
                            <td width="53%" align="left" valign="middle">
                              <input name="cn2" type="text" class="textfield06" id="cn2" onkeypress="return alpha(event,letters)"required>
                            </td>
                          </tr>
                          <tr>
                              <td width="47%" align="left" valign="middle">Course Name:03</td>
                              <td width="53%" align="left" valign="middle">
                                <input name="cn3" type="text" class="textfield06" id="cn3" onkeypress="return alpha(event,letters)"required>
                              </td>
                            </tr>
                            <tr>
                                <td width="47%" align="left" valign="middle">Course Name:04</td>
                                <td width="53%" align="left" valign="middle">
                                  <input name="cn4" type="text" class="textfield06" id="cn4" onkeypress="return alpha(event,letters)"required>
                                </td>
                              </tr>
                              <tr>
                                  <td width="47%" align="left" valign="middle">Course Name:05</td>
                                  <td width="53%" align="left" valign="middle">
                                    <input name="cn5" type="text" class="textfield06" id="cn5" onkeypress="return alpha(event,letters)"required>
                                  </td>
                                </tr>
                                <tr>
                                    <td width="47%" align="left" valign="middle">Course Name:06</td>
                                    <td width="53%" align="left" valign="middle">
                                      <input name="cn6" type="text" class="textfield06" id="cn6" onkeypress="return alpha(event,letters)"required>
                                    </td>
                                  </tr>
                                  <tr>
                                      <td width="47%" align="left" valign="middle">Course Name:07</td>
                                      <td width="53%" align="left" valign="middle">
                                        <input name="cn7" type="text" class="textfield06" id="cn7" onkeypress="return alpha(event,letters)"required>
                                      </td>
                                    </tr>
                          <tr>
                              <td width="47%" align="left" valign="middle">Course Name:08</td>
                              <td width="53%" align="left" valign="middle">
                                <input name="cn8" type="text" class="textfield06" id="cn8" onkeypress="return alpha(event,letters)"required>
                              </td>
                            </tr>
                            <tr>
                                <td width="47%" align="left" valign="middle">Course Name:09</td>
                                <td width="53%" align="left" valign="middle">
                                  <input name="cn9" type="text" class="textfield06" id="cn9" onkeypress="return alpha(event,letters)">
                                </td>
                              </tr>
                              <tr>
                                  <td width="47%" align="left" valign="middle">Course Name:10</td>
                                  <td width="53%" align="left" valign="middle">
                                    <input name="cn10" type="text" class="textfield06" id="cn10" onkeypress="return alpha(event,letters)">
                                  </td>
                                </tr>
                                <tr>
                                    <td width="47%" align="left" valign="middle">Course Name:11</td>
                                    <td width="53%" align="left" valign="middle">
                                      <input name="cn11" type="text" class="textfield06" id="cn11" onkeypress="return alpha(event,letters)">
                                    </td>
                                  </tr>
                                  <tr>
                                      <td width="47%" align="left" valign="middle">Course Name:12</td>
                                      <td width="53%" align="left" valign="middle">
                                        <input name="cn12" type="text" class="textfield06" id="cn12" onkeypress="return alpha(event,letters)">
                                      </td>
                                    </tr>
                        
                        
                       
                        
                      </tbody></table></td>
                      <td width="3%" align="left" valign="middle">&nbsp;</td>
                    </tr>
                  </tbody></table></td>
                </tr>
                
                


          
          
                     
          
                   
             
                  
              <tr>
                    <td colspan="3" align="center" valign="middle" bgcolor="#A2A2A2">
                <!--      <button type="submit" name="button" id="button">Next</button></td> -->
                      <button type="submit" id="button" name="reg_user" >Submit</button></td>


                      <?php
$DB="registration";
$USER="root";
$PASSWORD="";
$HOST="localhost";
$connect = mysqli_connect($HOST, $USER, $PASSWORD, $DB);


if (!$connect) {
    echo "Connected failed";
}
if(isset($_POST['reg_user'])){
  $vname=$_POST['name'];
  $vfname=$_POST['fathername'];
  $vmname=$_POST['mothername'];
  $day=$_POST['b_day'];
  $month=$_POST['b_month'];
  $year=$_POST['b_year'];
   $gender=$_POST['sex'];
  $nationality=$_POST['nationality'];
  $religin=$_POST['religion'];
  $mar=$_POST['mstatus'];

  $email=$_POST['email'];
  $password=$_POST['password'];
  $repassword=$_POST['re_password'];
  $phone1=$_POST['phone1'];
  $phone2=$_POST['phone2'];
  
  

  $department=$_POST['Department'];
  $year=$_POST['Year'];
  $semester=$_POST['Semester'];
  $roll=$_POST['Roll'];
  $reg=$_POST['Reg'];
  $session=$_POST['Session'];

  $c1=$_POST['cc1'];
  $c2=$_POST['cc2'];
  $c3=$_POST['cc3'];
  $c4=$_POST['cc4'];
  $c5=$_POST['cc5'];
  $c6=$_POST['cc6'];
  $c7=$_POST['cc7'];
  $c8=$_POST['cc8'];
  $c9=$_POST['cc9'];
  $c10=$_POST['cc10'];
  $c11=$_POST['cc11'];
  $c12=$_POST['cc12'];

  $n1=$_POST['cn1'];
  $n2=$_POST['cn2'];
  $n3=$_POST['cn3'];
  $n4=$_POST['cn4'];
  $n5=$_POST['cn5'];
  $n6=$_POST['cn6'];
  $n7=$_POST['cn7'];
  $n8=$_POST['cn8'];
  $n9=$_POST['cn9'];
  $n10=$_POST['cn10'];
  $n11=$_POST['cn11'];
  $n12=$_POST['cn12'];

  
  $apu5 = "INSERT INTO all_information (Applicant_Name, Father_Name,Mother_Name,Birth_Day,Birth_Month,Birth_Year,Gender,Nationality,Religion,Marital_Status,department,year,semester,roll,reg,session,email,password,re_password,phone,Additional_phone,cc1, cc2,cc3,cc4,cc5,cc6,cc7,cc8,cc9,cc10,cc11,cc12,cn1, cn2,cn3,cn4,cn5,cn6,cn7,cn8,cn9,cn10,cn11,cn12) VALUES ('$vname','$vfname','$vmname','$day','$month','$year','$gender','$nationality','$religin','$mar','$department','$year','$semester','$roll','$reg','$session','$email','$password','$repassword','$phone1','$phone2','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12','$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12')";
  $apu4 = "INSERT INTO course_name (cn1, cn2,cn3,cn4,cn5,cn6,cn7,cn8,cn9,cn10,cn11,cn12) VALUES ('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$n9','$n10','$n11','$n12')";
  
  $apu3 = "INSERT INTO course_code (cc1, cc2,cc3,cc4,cc5,cc6,cc7,cc8,cc9,cc10,cc11,cc12) VALUES ('$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$c10','$c11','$c12')";
  
  $apu2 = "INSERT INTO academic_information (department,year,semester,roll,reg,session) VALUES ('$department','$year','$semester','$roll','$reg','$session')";

  $apu1 = "INSERT INTO register_information (email,password,re_password,phone,Additional_phone) VALUES ('$email','$password','$repassword','$phone1','$phone2')";

  $apu = "INSERT INTO personal_information (Applicant_Name, Father_Name,Mother_Name,Birth_Day,Birth_Month,Birth_Year,Gender,Nationality,Religion,Marital_Status) VALUES ('$vname','$vfname','$vmname','$day','$month','$year','$gender','$nationality','$religin','$mar')";
  
  if(mysqli_query($connect,$apu)){
      
     } else {
       echo "Not OK!";
     }

     if(mysqli_query($connect,$apu1)){
      
     } else {
       echo "Not OK!";
     }
     if(mysqli_query($connect,$apu2)){
      
     } else {
       echo "Not OK!";
     }
     if(mysqli_query($connect,$apu3)){
      
     } else {
       echo "Not OK!";
     }
     if(mysqli_query($connect,$apu5)){
      echo"Registered Successfully.Please Login to get your application id for payment";
     } else {
       echo "Not OK!";
     }
}

?>



  

                  </tr>
        
                </tbody></table>
              </td>
            </tr>
            
           
                </tbody></table>
              </fieldset></td>
            </tr>
          </tbody></table>

          
          
          </td></tr></tbody></table></form>
          

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
