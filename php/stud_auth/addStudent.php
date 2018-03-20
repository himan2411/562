<!DOCTYPE html>
<html lang="en">
<?php
require "conn.php";

    if(isset($_POST['submit']))
	{
    
		$Gr_No=$_POST['Gr_No'];
        $Aadhar_No=$_POST['Aadhar_No'];
        $Student_Name=$_POST['Student_Name'];
        $Father_Name=$_POST['Father_Name'];
        $Mother_Name=$_POST['Mother_Name'];
		$Email_Id=$_POST['Email_Id'];
        $Contact_No=$_POST['Contact_No'];
        $DOB=$_POST['DOB'];
        $Gender=$_POST['Gender'];
        $Standard=$_POST['Standard'];
        $Percentage=$_POST['Percentage'];
        $sql = "INSERT INTO Student (Gr_No,Index_No, Aadhar_No,Student_Name,Father_Name,Mother_Name,Contact_No,Email_Id,DOB,Gender,Standard)
		VALUES ('$Gr_No', 'GJ01CU','$Aadhar_No','$Student_Name','$Father_Name','$Mother_Name','$Contact_No','$Email_Id','$DOB','$Gender','$Standard' )";
		if ($conn->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
    }
?>
<head>
     <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Add Student</title>
   </head>
<body>
    <?php include("header.php");?>
        <div class="container">
                
                <div class="row">
                    <div class="col s12">
                        <div id="main" class="card">
                            <div class="card-content">
                                <span class="card-title"> 
                                    <h2><b>Register New Students</b></h2>
                                  </span>
                                        <div>
                                            <h4>Student's Information</h4>
											
                                                <div class="row">
                                                        <form class="col s12" action="" id="form1" name="form1" method="post">
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Gr_No" name="Gr_No" type="text" autofocus  class="validate">
                                                                    <label for="Gr_No">Gr_No</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="Aadhar_No" name="Aadhar_No" type="number" autofocus  class="validate">
                                                                    <label for="Aadhar_No">Aadhar_No</label>
                                                                </div>
                                                          </div>
                                                          <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Index_No" name="Index_No" type="text" autofocus  class="validate">
                                                                    <label for="Index_No">Index_No</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="Student_Name" name="Student_Name" type="text" autofocus  class="validate">
                                                                    <label for="Student_Name">Student_Name</label>
                                                                </div>
                                                          </div>
                                                          <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Father_Name" name="Father_Name" type="text" autofocus  class="validate">
                                                                    <label for="Father_Name">Father_Name</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="Mother_Name" name="Mother_Name" type="text" autofocus  class="validate">
                                                                    <label for="Mother_Name">Mother_Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Contact_No" name="Contact_No" type="text" autofocus  class="validate">
                                                                    <label for="Contact_No">Contact_No</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="Email_Id" name="Email_Id" type="email" autofocus  class="validate">
                                                                    <label for="Email_Id">Email_Id</label>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <label for="DOB">DOB</label>
																	<br>
																	<input id="DOB" name="DOB" type="date" autofocus  class="validate">
                                                                    
                                                                </div>
															
																<br>
																<div>
                                                                <input type="radio" name="gender" value="Male" id="Male" />
																	  <label for="Male">Male</label>
																	&nbsp
																   														 
																   <input type="radio" name="gender" value="Female" id="Female" />
																	  <label for="Female">Female</label>
																</div>
																</div>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="Standard" name="Standard" type="text" autofocus  class="validate">
                                                                    <label for="Standard">Standard</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="Percentage" name="Percentage" type="text" autofocus  class="validate">
                                                                    <label for="Percentage">Percentage</label>
                                                                </div>
                                                            </div>
                                                            <input class="btn waves-effect waves-light" type="submit"  name="submit" id="submit" value="Add Student" />
                                                          </form>
                                                        </div>
                                                      </div>  
                                        
                                </div>
                    </div>
                </div>
            </div> 

            

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

    <script>
       $(".button-collapse").sideNav();

        // Init Sidenav
        $('.button-collapse').sideNav();
    </script>
    <script>
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
    </script>
</body>
</html>