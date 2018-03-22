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
				<div>
					<center><h4>Government Representative Login</h4></center>
						<div class="row">
			<form class="col s8" method="POST" action="login_process.php" style="margin-left:35%;">
			
				<div class="row">
						<div class="input-field col s6">
						  <input id="percentage" type="text" name="username" class="validate">
						  <label for="name">Index Number</label>
						</div><br><br><br>
						<div class="input-field col s6">
						  <input id="last_name" type="password" name="password" class="validate">
						  <label for="last_name">Password</label>
						</div><br><br><br>
						<input class="waves-effect waves-light btn blue" type="submit" value="Login" />
						    
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