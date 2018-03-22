@extends('layouts.app')


@section('sidebar')
            @parent
@endsection
    

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col s12">
                      <h1 class="mdc-card__title mdc-card__title--large">Student's Information</h1>
                      
                      <div id="responsive" class="section scrollspy">
                        <h2 class="header">Responsive Table</h2>
                        <div class="row">
                          <div class="col s12">
                            <div class="table-wrapper">
                              <table class="responsive-table highlight">
                                  @foreach ($students as $student) {
                                    echo $student->Gr_No;
                                  }
                                <thead>
                                  <tr>
                                    <th>Gr_No</th>
                                    <th>Index_No</th>
                                    <th>Student_Name</th>
                                    <th>Father_Name</th>
                                    <th>Contact_No</th>
                                    <th>DOB</th>
                                    <th>Gender</th>
                                    <th>Standard</th>
                                    <th>Percentage</th>
                                    <th>C_Percentage</th>
                                    <th>Ext_Academics</th>
                                    <th>C_Ext_Academics</th>
                                    <th>Ext_Sports</th>
                                    <th>Ext_Cultural</th>
                                    <th>C_Ext_Cultural</th>
                                    <th>Status</th>
                                  </tr>
                                </thead>
                                {{--  <tbody>
                                  <tr>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>
                                    <td>Alvin</td>
                                    <td>Eclair</td>
                                    <td>$0.87</td>

                                  </tr>
                                  <tr>
                                      <td>Alvin</td>
                                      <td>Eclair</td>
                                      <td>$0.87</td>
                                      <td>Alvin</td>
                                      <td>Eclair</td>
                                      <td>$0.87</td>
                                      <td>Alvin</td>
                                      <td>Eclair</td>
                                      <td>$0.87</td>
                                      <td>Alvin</td>
                                      <td>Eclair</td>
                                      <td>$0.87</td>
                                      <td>Alvin</td>
                                      <td>Eclair</td>
                                      <td>$0.87</td>
                                      
                                    </tr>
                                    <tr>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        <td>Alvin</td>
                                        <td>Eclair</td>
                                        <td>$0.87</td>
                                        
                                      </tr>
                                      <tr>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                          <td>Alvin</td>
                                          <td>Eclair</td>
                                          <td>$0.87</td>
                                          
                                        </tr>
                                        <tr>
                                            <td>Alvin</td>
                                            <td>Eclair</td>
                                            <td>$0.87</td>
                                            <td>Alvin</td>
                                            <td>Eclair</td>
                                            <td>$0.87</td>
                                            <td>Alvin</td>
                                            <td>Eclair</td>
                                            <td>$0.87</td>
                                            <td>Alvin</td>
                                            <td>Eclair</td>
                                            <td>$0.87</td>
                                            <td>Alvin</td>
                                            <td>Eclair</td>
                                            <td>$0.87</td>
                                            
                                          </tr>
                                          <tr>
                                              <td>Alvin</td>
                                              <td>Eclair</td>
                                              <td>$0.87</td>
                                              <td>Alvin</td>
                                              <td>Eclair</td>
                                              <td>$0.87</td>
                                              <td>Alvin</td>
                                              <td>Eclair</td>
                                              <td>$0.87</td>
                                              <td>Alvin</td>
                                              <td>Eclair</td>
                                              <td>$0.87</td>
                                              <td>Alvin</td>
                                              <td>Eclair</td>
                                              <td>$0.87</td>
                                              
                                            </tr>
                                  <tr>
                                    <td>Alan</td>
                                    <td>Jellybean</td>
                                    <td>$3.76</td>
                                  </tr>
                                  <tr>
                                    <td>Jonathan</td>
                                    <td>Lollipop</td>
                                    <td>$7.00</td>
                                  </tr>
                                  <tr>
                                    <td>Shannon</td>
                                    <td>KitKat</td>
                                    <td>$9.99</td>
                                  </tr>  --}}
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                        
                    </div>
                    </div>
                </div>
            </div>
@endsection
