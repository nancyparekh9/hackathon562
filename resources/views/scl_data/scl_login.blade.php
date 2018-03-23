@extends('layouts.app')
<?php
	session_start();
  	if(isset($_SESSION['Index_No'])) 
 	{
       //header("location: index.php");
					 
	 }
?>

@section('content')
		<div class="container">    
                <div class="row">
                    <div class="col s12">
                        <div id="main" class="card">
                            <div class="card-content">
		                        <span class="card-title"> 
				                    <div>
											@if(session('success'))
											<div class="card red">{{session('success')}}</div>
										@endif
									@include('inc.message')
						
					                    <center><h4>Student Representative Login</h4></center>
						                    <div class="row">
											 <form class="col s8" method="POST" action="/scl/login/submit" style="margin-left:35%;">
											 {!! csrf_field() !!}
                                    				<div class="row">
						                                <div class="input-field col s6">
						                                    <input id="emailid" type="text" name="emailid" class="validate">
						                                    <label for="name">Email Id</label>
						                                </div><br><br><br>
						                                <div class="input-field col s6">
						                                    <input id="password" type="password" name="password" class="validate">
						                                    <label for="password">Password</label>
                                                        </div><br><br><br>
                                                        <button class="btn waves-effect waves-light blue" type="submit" value="Login">Submit
                                                            <i class="material-icons right">send</i>
                                                        </button>
						                                    <!-- <input class="waves-effect waves-light btn blue" type="submit" value="Login" /> -->
						                                    <a class="waves-effect waves-light btn" href="..\add_school\addSchool.html" style="margin-left:0%;">Register</a>     
				                                        </div>
                                                </form>
		                                    </div>
				                        </div>
                                </span>
                            </div>
                    </div>
                </div>
			</div>
@endsection