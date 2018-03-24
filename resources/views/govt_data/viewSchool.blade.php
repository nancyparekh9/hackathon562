@extends('layouts.app')

@section('sidebar')
            @parent
@endsection
    
@section('content')
    <div class="container">
		<div class="row">
            <div class="col s12">
				<h2><b>Filter Information</b></h2>
					<form class="col s12" method="POST" action="viewSchool_process.php">
						<form action="">
							<div class="input-field col s3">
								<select name="Type" onchange="showUser(this.value)">
									<option value="" disabled selected>Choose your option</option>
									<option value="RURAL">Rural</option>
									<option value="URBAN">Urban</option>
								</select>
								<label>Select Type</label>
							</div>  
                    </form>
                    
						<form action="">
							<div class="input-field col s3">
								<select name="District"  onchange="showUser1(this.value)"> 
									<option value="" disabled selected>Choose your option</option>
									<option value="AHMEDABAD">Ahmedabad</option>
									<option value="SURAT">Surat</option>
									<option value="VADODARA">Vadodra</option>
									<option value="KHEDA">Kheda</option>
								</select>
								<label>Select District</label>
							</div> 
						</form>  
						<br>	&nbsp&nbsp&nbsp&nbsp							
			<!--<input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn" />-->
					</form>
					<br>
					<div id="txtHint"><b></b></div>                  
            </div>
        </div>
    </div>  
@endsection
<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","showFilteredSchools.php?School_Type="+str,true);
        xmlhttp.send();
    }
}



function showUser1(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST","showFilteredSchools.php?District="+str,true);
        xmlhttp.send();
    }
}
	
	$(document).ready(function() 
	{
    $('select').material_select();
	});
	$(".button-collapse").sideNav();

	// Init Sidenav
	$('.button-collapse').sideNav();
	$('.datepicker').pickadate
	({
	selectMonths: true, // Creates a dropdown to control month
	selectYears: 15, // Creates a dropdown of 15 years to control year,
	today: 'Today',
	clear: 'Clear',
	close: 'Ok',
	closeOnSelect: false // Close upon selecting a date,
	});
 </script>