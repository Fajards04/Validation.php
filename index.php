<!DOCTYPE HTML>
<html>  
<head>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>

<div class="container">    
            
    <div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Sign Up</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="signinlink.php">Sign In</a></div>
            </div>  
            <div class="panel-body" >
              
                    

                            

<form action="valid.php" method="post">
    First Name:	 <input type="text" name="name" placeholder="First Name"  ><br><br>
    Last Name: <input type="text" name="lastname" placeholder="Lastname"><br><br>
    Middle Name: <input type="text" name="middlename" placeholder="Middlename"><br><br>
	Address: <input type="text" name="address" placeholder="Address"><br><br>
	Date of Birth:<input type="date" name="datebirth"  placeholder="Date Birth" value="2020-01-01"> <br><br>
	Place of Birth: <input type="text" name="placebirth" placeholder="Place Birth"><br><br>
    
	<label>
	Gender:
	<input type="radio" name="gender" value="male" checked>Male
	<input type="radio" name="gender" value="female">Female
					</label><br><br>

	Guardian: <input type="text" name="guardian" placeholder="Guardian"><br><br>
	Contact num#
  <input type="text" id="phone" name="contactNumber" placeholder="+63*********"  pattern="[+0-9]{13}" required value="+63" ><br><br>
	Civil Status: <input type="text" name="civilstat" placeholder="Civil stat"><br><br>
	<label>
						Year Level:
						<select name="yearLevel" >
						    <option value="1st Year">1st Year</option>
						    <option value="2nd Year">2nd Year</option>
						    <option value="3rd Year">3rd Year</option>
						    <option value="4th Year">4th Year</option>
						</select>
					</label><br><br>
	<label>
						Course:
						<select name="course">
						    <option value="BS-CPE">BS-CPE</option>
						    <option value="BS-IT">BS-IT</option>
						    <option value="BS-TCM">3BS-TCM</option>
						    <option value="BS-EE">BS-EE</option>
						</select>
					</label><br><br>    

	School year:<input type="text" name="schoolyr" placeholder="School year"><br><br>
	
 
<input type="submit" class="btn btn-primary mb-2"><br><br>


</body>
</html>
