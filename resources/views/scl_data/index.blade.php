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
                                    <th>Father Name</th>
                                    <th>Contact No</th>
                                    <th>Email Id</th>
                                    <th>Birth Date</th>
                                    <th>Gender</th>
                                    <th>Standard</th>
                                    <th>Percentage</th>
                                    <th>Status</th>
                                    <th>Extea Details</th>
                                  </tr>
                                </thead>
                                @if(count($students) > 0)
                                    @foreach($students as $student)
                                <tbody>
                                  <tr>
                                      <td>{{$student->Gr_No}}</td>
                                      <td>{{$student->Index_No}}</td>
                                      <td>{{$student->Student_Name}}</td>
                                      <td>{{$student->Father_Name}}</td>
                                      <td>{{$student->Contact_No}}</td>
                                      <td>{{$student->Email_Id}}</td>
                                      <td>{{$student->DOB}}</td>
                                      <td>{{$student->Gender}}</td>
                                      <td>{{$student->Standard}}</td>
                                      <td>{{$student->Percentage}}</td>
                                      <td>
                                          <!-- Modal Trigger -->
                                            <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Modal</a>
    
                                            <!-- Modal Structure -->
                                            <div id="modal1" class="modal">
                                              <div class="modal-content">
                                                <h4>Modal Header</h4>
                                                <table class="responsive-table highlight">
                                                    <thead>
                                                      <tr>
                                                        <th>Avg-Percentage</th>
                                                        <th>Academics</th>
                                                        <th>Avg-Academics </th>
                                                        <th>Sports</th>
                                                        <th>Avg-Sports</th>
                                                        <th>Cultural</th>
                                                        <th>Avg-Cultural</th>
                                                      </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$student->C_Percentage}}</td>
                                                            <td>{{$student->Ext_Academics}}</td>
                                                            <td>{{$student->C_Ext_Academics}}</td>
                                                        </tr>
                                                      </tbody>
                                                  </table>
                                              </div>
                                              <div class="modal-footer">
                                                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
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
