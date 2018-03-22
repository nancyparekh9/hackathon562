
   <h4>Student's Information</h4>

     <div class="row">
         
         <div class="input-field col s6">
                   <input id="GR_no" type="number" class="validate">
                   <label for="GR_no">G.R. Number: <?php echo $grnum;
                       $_SESSION["Gr_No"] = $grnum;
                       ?></label>
         </div>
         <div class="input-field col s6">
               <input id="std" type="number" class="validate">
               <label for="standard">Standard: <?php echo $row1['Standard'];?></label>
             </div>
         <!--div class="input-field col s6">
           <input id="last_name" type="text" class="validate">
           <label for="last_name"></label>
         </div-->
       </div>
       <div class="row">
           <div class="input-field col s6">
         <input id="first_name" type="text" class="validate">
           <label for="first_name">Student's Name: <?php echo $fullname;?></label>	
         </div>
         <div class="input-field col s6">
                         <input id="dob" type="text" class="datepicker">
                         <label for="dob">Birth Date: <?php echo $row1['DOB'];?></label>
                       </div>
       </div>
       <div>
         <div class="input-field col s6">
           <input id="parent_name" type="text" class="validate">
           <label for="parent_name">Father's Name: <?php echo $row1['Father_Name'];?></label>
         </div>
         <div class="input-field col s6">
           <input id="parent_name" type="text" class="validate">
           <label for="parent_name">Mother's Name: <?php echo $row1['Mother_Name'];?></label>
         </div>
       </div>
       <div class="row">
             
             <div class="input-field col s6">
                     <input id="Contact" type="number" class="validate">
                     <label for="Contact">Contact: <?php echo $row1['Contact_No'];?></label>
             </div>
             <div class="input-field col s6">
                 <input id="parent_email" type="email" class="validate">
                 <label for="parent_email">E-mail: <?php echo $row1['Email_Id'];?></label>
         </div>
         </div>
         <div class="row">
                 
                 
         </div>
   <h4>School Academic</h4>
           <div class="row">
              <div class="input-field col s7">
               <input id="percentage" type="number" class="validate">
               <label for="percentage">Percentage: <?php echo $row1['Percentage'];?></label>
             </div>
           </div>
           
           <h4>Extra Curriculum</h4>
                           <div class="card-content">
                               <span class="card-title"></span>
                               <form action="addAcademic.php" method="GET">
                               
                               <div class="input-field col s12">
                                 <select name="type" id="type" >
                                 <option  value="" ,name="val2",id="val2">Select Type</option>
                                 <option  value="Academics" ,name="val2",id="val2">Academics</option>
                                 <option  value="Sports",name="val2",id="val2">Sports</option>
                                 <option  value="Cultural",name="val2",id="val2">Cultural</option>
                                   </select>
                               
                                   </div> <br>
                               
                                   
                                   <div class="input-field col s12">  
                                 
                               
                                 <select name="type1" id="type1" >
                                 <option  value="">Select Rank</option>
                                 <option  value="1" >First</option>
                                 <option  value="2">Second</option>
                                 <option  value="3">Third</option>	
                               </select>
                               <div class="input-field col s12">
                                 <select name="val1" id="val1" >
                                 <option  value=""  >Select Category</option>
                                 <option  value="District" >District</option>
                                 <option  value="State">State</option>
                                 <option  value="National">National</option>	
                                 
                                 <option  value="Interschool" >Interschool</option>
                               </select>
                               
                               </div> <br>
                                   </div>
                                   <div class="row">

                                   <div class="input-field col s12">
                                     <input type="text" name="certi" id="certi">
                                     <label for="task">Competition Name</label>
                                   </div>
                                   </div> 
                               </div>
                                <input type="submit" value="Upload Certificate" class="btn">
                                   
                                 </form>
  <!--         <div class="card-action">
             <h5 id="task-title">All Certificate</h5>
             
             <ul class="collection"></ul>
             <a href="#" class="clear-tasks btn black">Clear Certificate</a>
           </div> -->