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
                            @if(session('success'))
                            <div class="card green">{{session('success')}}</div>
                        @endif
                    <h2><b>Register New Students</b></h2>
                    </span>
                        <div>
                        <h4>Student's Information</h4>
                            <div class="row">
                                <form class="col s12" action="/scl/addstudents/submit" method="POST">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="Gr_No" name="Gr_No" type="text" autofocus  class="validate">
                                            <label for="Gr_No">Gr No</label>
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="Aadhar_No" onfocus=document.getElementById("Aadhar_No").value="" onblur="aadhar_validate()" name="Aadhar_No" type="text" autofocus  class="validate">
                                            <label for="Aadhar_No">Aadhar No</label><br>
                                            
                                        </div>
                                  </div>
                                  <div class="row">
                                        
                                        <div class="input-field col s12">
                                            <input required id="Student_Name"onfocus=document.getElementById("Student_Name").value="" onblur="name_validate(document.getElementById('Student_Name'))" name="Student_Name" type="text" autofocus  class="validate">
                                            <label for="Student_Name">Student Name</label>
                                            
                                        </div>
                                  </div>
                                  <div class="row">
                                        <div class="input-field col s6">
                                            <input required id="Father_Name" onfocus=document.getElementById("Father_Name").value="" onblur="name_validate(document.getElementById('Father_Name'))"name="Father_Name" type="text" autofocus  class="validate">
                                            <label for="Father_Name">Father Name</label>
                                            
                                        </div>
                                        <div class="input-field col s6">
                                            <input required id="Mother_Name"onfocus=document.getElementById("Mother_Name").value="" onblur="name_validate(document.getElementById('Mother_Name'))" name="Mother_Name" type="text" autofocus  class="validate">
                                            <label for="Mother_Name">Mother Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        
                                        
                                        
                                        
                                        <div class="input-field col s6">
                                            <label for="Contact_No">Contact No</label>
                                            <input required id="Contact_No"placeholder="+91"onfocus=document.getElementById("Contact_No").value="" onblur="contact_validate()" type="text"  name="Contact_No" type="text" autofocus  class="validate">
                                            
                                        </div>
                                        
                                        <div class="input-field col s6">
                                            <input required id="Email_Id" onfocus=document.getElementById("Email_Id").value="" onblur="mail_validate()" name="Email_Id" type="text" autofocus  class="validate">
                                            <label for="Email_Id">Email Id</label>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <label for="DOB">DOB</label>
                                            <br>
                                            <input required id="DOB" name="DOB" type="date" autofocus  class="validate">
                                            
                                        </div>
                                    
                                        <br>
                                        <label for="Gender">Gender</label>
                                        <div><br>
                                        <input type="radio" name="Gender" value="1" id="Male" />
                                              <label for="Male">Male</label>
                                            &nbsp
                                                                                                    
                                           <input required type="radio" name="Gender" value="0" id="Female" />
                                              <label for="Female">Female</label>
                                        </div>
                                        </div>
                                    <div class="row">
                                     
                                        <div class="input-field col s6">
                                            <select name="Standard" required onchange="showUser1(this.value)"> 
                                              <option value="" disabled selected>Select Standard</option>
                                              <option value="1">1</option>
                                              <option value="2">2</option>
                                       .       <option value="3">3</option>
                                              <option value="4">4</option>
                                              <option value="5">5</option>
                                              <option value="6">6</option>
                                              <option value="7">7</option>
                                              <option value="8">8</option>
                                            </select>
                                            
                                    </div>
                                      
                                     </div>
                                     <div class="row" >
                                     <div class="input-field col s6">
                                     <select name="Parent" required onchange="yesnoCheck(this);"> 
                                     <option value="" disabled selected>Earning Member</option>
                                     <option value="father">Father</option>
                                     <option value="mother">Mother</option>
                                     <option value="other">Other</option>
                                     
                                   </select>
                                    </div>
                                        <div id="ifYes" style="display: none;" class="input-field col s6">
                                        <label for="other">Guardian</label>     
                                        <input required id="Guardian" onfocus=document.getElementById("Guardian").value="" onblur="name_validate(document.getElementById('Guardian'))"name="Guardian" type="text" autofocus  class="validate">
                                        <br />
                                    </div>
                                    </div>
                                    <div class="row">
                                    <div class="input-field col s6">
                                    <label for="Pan" >Pan Card No.</label> 
                                    <input required id="Pan" onfocus=document.getElementById("Pan").value="" name="Pan" type="text" autofocus  class="validate">     
                                    </div>
                                    <div class="input-field col s6">
                                    <label for="Income" >Guardian Income</label> 
                                    <input required id="Income" onblur="isNumeric()"name="Income" type="text" autofocus  class="validate">     
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
    </div>
  <script>


        function yesnoCheck(that) {
            if (that.value == "other") {
            document.getElementById("ifYes").style.display = "block";
            } else {
            document.getElementById("ifYes").style.display = "none";
            }
        }
        function aadhar_validate()
        {
            var a=document.getElementById("Aadhar_No").value;
            var len=a.length;
            
            if(a.match(/([0-9]{12})$/)&&len==12)
            {
                document.getElementById("Aadhar_No").style.borderColor="green";
            }	
            else
            {
                
                document.getElementById("Aadhar_No").style.borderColor="red";
                document.getElementById("Aadhar_No").placeholder="\t\t\tPlease enter a valid Aadhar number";
            }
                
        }
        function isNumeric()
        {
            a=document.getElementById("Income").value;
            if(a.match( /^\d+(?:\.\d{0,2})$/))
            {
                document.getElementById("Income").style.borderColor="green";
            }	
            else
            {
                
                document.getElementById("Income").style.borderColor="red";
                document.getElementById("Income").placeholder="\t\t\tPlease enter a valid Income";
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
					a.placeholder="\t\t\t\t  Please enter a valid Name";
					document.getElementById("submit").disabled=true;
				}
			}
                                                    
        function contact_validate()
        {
                var a=document.getElementById("Contact_No").value;
                var len=a.length;
                
              if(a.match(/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/))
                    {
                  document.getElementById("Contact_No").style.borderColor="green";
                    }
                  else
                    {
                    document.getElementById("Contact_No").style.borderColor="red";
                    document.getElementById("Contact_No").placeholder="\t\t\tPlease enter a valid Contact number";
                    } 
        }
    
        function mail_validate()
        {
                var a=document.getElementById("Email_Id").value;
                
              if(a.match(/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/))
                    {
                  document.getElementById("Email_Id").style.borderColor="green";
                    }
                  else
                    {
                    document.getElementById("Email_Id").style.borderColor="red";
                    document.getElementById("Email_Id").placeholder="\t\t\t Please enter a valid Email ID";
                    } 
                    //
        }
    
        function percentage_validate()
        {
                var a=document.getElementById("Percentage").value;
                
              if(a.match(/^(\d+|\d+[.]\d+)%?$/)&&a<=100)
                    {
                  document.getElementById("Percentage").style.borderColor="green";
                    }
                  else
                    {
                    document.getElementById("Percentage").style.borderColor="red";
                    document.getElementById("Percentage").value="\t\t\t\tPlease enter a valid Percentage value";
                    } 
        }
    </script>    
@endsection
