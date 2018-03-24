@extends('layouts.app')

@section('sidebar')
            @parent
@endsection
    



@section('content')
	<div class="container">
		<div class="row">
            <div class="col s12">
                <div id="main" class="card">
                    <div class="card-content">
					
                        <span class="card-title"> 
								<h2><b>School Registration</b></h2>
                        </span>
                        <div>
						@if(session('success'))
											<div class="card red">{{session('success')}}</div>
										@endif
                        <h4>School's Information</h4>
							<div class="row">
								<form class="col s12" action="/sclregister/submit" id="form1" name=	"form1" method="post">
									<div class="row">
										<div class="input-field col s6">
											<input required id="Index_No" name="Index_No" type="text" autofocus class="validate">
											<label for="Index_No">Index No</label>
										</div>
										<div class="input-field col s6">
											<input required id="Password" name="Password" type="password" autofocus required="required" class="validate">
											<label for="Password">Password</label>
										</div>                
									</div>
									<span class="card-title"> 
										<h4>School Representative</h4>
									</span>
									<div class="row">
										<div class="input-field col s6">
											<input id="R_Name" name="R_Name" onblur="name_validate(document.getElementById('R_Name'))"type="text" autofocus class="validate">
											<label for="R_Name">Representative Name</label>
										</div>
										<div class="input-field col s6">
											<input id="Email_Id" name="Email_Id" onblur="mail_validate()" type="text" autofocus class="validate">
											<label for="Email_Id">Email</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s6">
											<input id="R_Password" name="R_Password" type="password" autofocus class="validate">
											<label for="R_Password">Password</label>
										</div>
										<div class="input-field col s6">
											<input id="Cpassword" onblur="pass_validate()"name="Cpassword" type="password" autofocus class="validate">
											<label for="Cpassword">Confirm Password</label>
										</div>
									</div>
									<div class="row">
										<div class="input-field col s6">
											<input id="Mobile_No" name="Mobile_No" placeholder="+91"onfocus=document.getElementById("Mobile_No").value="" onblur="contact_validate()" type="text" autofocus class="validate">
											<label for="Mobile_No">Mobile No</label>      
										</div>
									</div>
									<input class="btn waves-effect waves-light" type="submit" name="submit" id="submit" value="Add Representative" />
								</form>
							</div>
                        </div>
                    </div>
                </div>
            </div>
		</div> 
	</div> 
@endsection
	<script>
		function pass_validate()
		{
			var pass=document.getElementById('R_Password').value;
			var cpass=document.getElementById('Cpassword').value;
			if(pass!=cpass)
					alert('Confirm password does not match');
		}
		function contact_validate()
		{
				var a=document.getElementById("Mobile_No").value;
				var len=a.length;
				if(a.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/)&&len==10)
				{
				  document.getElementById("Mobile_No").style.borderColor="green";
				  document.getElementById("submit").disabled=false;
				}
				 else
				{
					document.getElementById("Mobile_No").style.borderColor="red";
					document.getElementById("Mobile_No").placeholder="\t\t\tPlease enter a valid Contact number";
					document.getElementById("submit").disabled=true;
				} 
		}
		function mail_validate()
		{
			var a=document.getElementById("Email_Id").value;
			if(a.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/))
			{
				 document.getElementById("Email_Id").style.borderColor="green";
				 document.getElementById("submit").disabled=false;
			}
			 else
			{
				document.getElementById("Email_Id").style.borderColor="red";
				document.getElementById("Email_Id").placeholder="\t\t\t Please enter a valid Email ID";
				document.getElementById("submit").disabled=true;
			} 
		}
		
		function name_validate(a)
		{
			var b=a.value;
			if(b.match(/^[A-Za-z\s]+$/))
			{
				a.style.borderColor="green";
				document.getElementById("submit").disabled=false;
			}	
			else
			{
																				
					a.style.borderColor="red";
					a.placeholder="\t\t\t\t\t Please enter a valid Name";
					document.getElementById("submit").disabled=true;
				}
																				
		}
		
		
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