@extends('layouts.app')


@section('sidebar')
            @parent
@endsection
    

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col s12">
                      <h2 class="header">Student's Information</h2>   
                      <div id="responsive" class="section scrollspy">
                        <div class="row">
                          <div class="col s12">
                            <div class="table-wrapper">
                              <table class="responsive-table highlight">
                                <thead>
                                  <tr>
                                    <th>Gr No</th>
                                    <th>Index No</th>
                                    <th>Student Name</th>
                                    <th>Gender</th>
                                    <th>Standard</th>
                                    <th>Percentage</th>
                                    <th>Credit-Academics</th>
                                    <th>Credit-Cultural</th>
                                    <th>Credit-Sports</th>
                                    <th>Complete</th>
                                    
                                  </tr>
                                </thead>
                                @if(count($students) > 0)
                                    @foreach($students as $student)
                                <tbody>
                                  <tr>
                                      <td>{{$student->Gr_No}}</td>
                                      <td>{{$student->Index_No}}</td>
                                      <td>{{$student->Student_Name}}</td>
                                      <td>{{$student->Gender}}</td>
                                      <td>{{$student->Standard}}</td>
                                      <td>{{$student->Percentage}}</td>
                                      <td>{{$student->Ext_Academics}}</td>
                                      <td>{{$student->Ext_Cultural}}</td>
                                      <td>{{$student->Ext_Sports}}</td>
                                      
                                      <td>
                                        
                                          <!-- Modal Trigger -->
                                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Details</a>
    
                                            <!-- Modal Structure -->
                                            <div id="modal1" class="modal modal-fixed-footer">
                                              <div class="modal-content">
                                                <h4>Complete Details</h4>
                                                <table class="responsive-table highlight">
                                                    <tr>
                                                      <thead>
                                                      <th>Gr No</th>
                                                      <th>Index No</th>
                                                      <th>Student Name</th>
                                                      <th>Father Name</th>
                                                      <th>Mother Name</th>
                                                      <th>Contact No</th>
                                                      <th>Email Id</th>
                                                      <th>Date of Birth</th>
                                                      <th>Gender</th>
                                                      <th>Standard</th>
                                                      <th>Percentage</th>
                                                      <th>Avg-Percentage</th>
                                                      <th>Credit-Academics</th>
                                                      <th>Avg-Academics </th>
                                                      <th>Credit-Cultural</th>
                                                      <th>Avg-Cultural</th>
                                                      <th>Credit-Sports</th>
                                                      <th>Avg-Sports</th>
                                                      <th>Status</th>
                                                      
                                                    </thead>
                                                    </tr>
                                                    <tbody>
                                                        <tr>
                                                        <td>{{$student->Gr_No}}</td>
                                                        <td>{{$student->Index_No}}</td>
                                                        <td>{{$student->Student_Name}}</td>
                                                        <td>{{$student->Father_Name}}</td>
                                                        <td>{{$student->Mother_Name}}</dr>
                                                        <td>{{$student->Contact_No}}</td>
                                                        <td>{{$student->Email_Id}}</td>
                                                        <td>{{$student->DOB}}</td>
                                                        <td>{{$student->Gender}}</td>
                                                        <td>{{$student->Standard}}</td>
                                                        <td>{{$student->Percentage}}</td>
                                                        <td>{{$student->C_Percentage}}</td>
                                                        <td>{{$student->Ext_Academics}}</td>
                                                        <td>{{$student->C_Ext_Academics}}</td>
                                                        <td>{{$student->Ext_Cultural}}</td>
                                                        <td>{{$student->C_Ext_Cultural}}</td>
                                                        <td>{{$student->Ext_Sports}}</td>
                                                        <td>{{$student->C_Ext_Sports}}</td>    
                                                  
                                                        <td>Pass</td>
                                                    
                                                     
                                                           
                                                            
                                                      </td>
                                                      </tbody>
                                                  </table>
                                              </div>
                                              <div class="modal-footer">
                                                <a href="#!" class="modal-action modal-close waves-effect waves-light btn-flat">Close</a>
                                              </div>
                                            </div>
                                        </td>
                                    </tr>
                                  </tbody>
                                  @endforeach
                                  
                                  @endif
                              </table>
                            </div>
                          </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
@endsection
