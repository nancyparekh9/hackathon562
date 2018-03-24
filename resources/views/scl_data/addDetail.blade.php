@extends('layouts.app')

@section('sidebar')
            @parent
@endsection
    

@section('content')
  <div class="container">
    <div class="row">
      <div class="col s12">
        <h4>Student's Information</h4>
          <div class="row">           
            <div class="input-field col s6">
              <input id="GR_no" type="text" class="validate">
              <label for="GR_no">G.R. Number:</label>
            </div>
            <div class="input-field col s6">
              <input id="std" type="number" class="validate">
              <label for="standard">Standard:</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Student's Name:</label>	
            </div>
            <div class="input-field col s6">
              <input id="dob" type="text" class="datepicker" onblur="date_validate()">
              <label for="dob">Birth Date:</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s6">
              <input id="Father_name" type="text" class="validate"  onblur="name_validate(document.getElementById('Father_Name'))">
              <label for="Father_Name">Father's Name:</label>
            </div>
            <div class="input-field col s6">
              <input id="Mother_Name" type="text" class="validate" onblur="name_validate(document.getElementById('Mother_Name'))">
              <label for="parent_name">Mother's Name:</label>
            </div>
          </div>
          <div class="row">                          
            <div class="input-field col s6">
              <input id="Contact" type="number" class="validate" onblur="contact_validate()">
              <label for="Contact">Contact</label>
            </div>
            <div class="input-field col s6">
              <input id="parent_email" type="email" class="validate" onblur="mail_validate()">
              <label for="parent_email">E-mail:</label>
            </div>
          </div>

          <form action="addAcademic.php" method="GET">
            <label>Browser Select</label>
                <select class="browser-default">
                  <option value="" disabled selected>Choose your option</option>
                  <option value="1">Option 1</option>
                  <option value="2">Option 2</option>
                  <option value="3">Option 3</option>
                </select>
            
                <select class="browser-default" name="type" id="type" >
                <option  value="Academics" ,name="val2",id="val2">Academics</option>
                <option  value="Sports",name="val2",id="val2">Sports</option>
                <option  value="Cultural",name="val2",id="val2">Cultural</option>
                </select>                  
                
                <select class="browser-default" name="type1" id="type1" >
                <option  value="">Select Rank</option>
                <option  value="1" >First</option>
                <option  value="2">Second</option>
                <option  value="3">Third</option>	
              </select>
              
                <select name="val1" id="val1" >
                <option  value=""  >Select Category</option>
                <option  value="District" >District</option>
                <option  value="State">State</option>
                <option  value="National">National</option>	
                <option  value="Interschool" >Interschool</option>
              </select>
              
            <div class="row">
              <div class="input-field col s12">
                  <input type="text" name="certi" id="certi">
                  <label for="task">Competition Name</label>
              </div>
            </div> 
            
            <input type="submit" value="Upload Certificate" class="btn">
            </form>
            <br>
            <br>
            <br>

         <form action="..\s3\uploader.php" method="POST">
            <input class="clear-tasks btn" type="submit" value="Upload Certificates">
          </form>

            <div class="card-action">
            <h5 id="task-title">All Certificate</h5>        
                
            <ul class="collection"></ul>
            <a href="#" class="clear-tasks btn black">Clear Certificate</a>
            </div>
          </div>
        </div>
      </div>   
    </div>
  </div>
</div>
@endsection