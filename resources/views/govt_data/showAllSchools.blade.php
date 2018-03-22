@extends('layouts.app')

@section('sidebar')
            @parent
@endsection
    

@section('content')
        <div class="container">
                
                <div class="row">
                    <div class="col s12">
           <h2><b>All Schools</b></h2>  
          </form>
          <div>
          <div class="row">
    <table class="responsive">
        <thead>
          <tr>
              <th>School_Name</th>
             
              <th>Index_No</th>
              <th>Address</th>
              <th>District</th>
            <!--  <th>Registration no.</th>-->
              <th>Email_Id</th>
              <th>Phone_No</th>
             
              <th>Type</th>
              
			  
              <th></th>
          </tr>
        </thead>

        <tbody>
		 <?php 
		  $sql = "SELECT * FROM `School_Registration` ";
		
	  
$result = $conn->query($sql);
      while($row1 = $result->fetch_assoc())
	  { 
	  
	  
  ?>
          <tr>
            
            <td><?php echo $row1['School_Name'];?></td>
			<td><?php echo $row1['Index_No'];?></td>
			<td><?php echo $row1['School_Address'];?></td>
			<td><?php echo $row1['District'];?></td>
			<td><?php echo $row1['Email_Id'];?></td>
			<td><?php echo $row1['Phone_No'];?></td>
			
			<td><?php echo $row1['School_Type'];?></td>
			
          </tr>
          
		  
		  <?php
		  
	  
		}
	  ?>
        </tbody>
		
		
      </table>    
                                </div>
                 
                            
                    </div>
                </div>
            </div> 
            </div>
@endsection

