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
                        <h2><b>View/Update Student Data</b></h2>
                    <div>
                        <div class="row">          
                                <div class="input-field col s3">
                                    <form action="#" method="GET">
                                            <select name="ac" id="ac" onchange="this.form.submit();">
                                                <option  value="" ,id="val">Select Standard</option>
                                                <option  value="1" ,id="val">1</option>
                                                <option  value="2",id="val">2</option>
                                                <option  value="3",id="val">3</option>
                                                <option  value="4",id="val">4</option>
                                                <option  value="5",id="val">5</option>
                                                <option  value="6",id="val">6</option>
                                                <option  value="7",id="val">7</option>
                                                <option  value="8",id="val">8</option>	
                                                </select>
                                                <label>Select Standard</label>
                                    </form>
                                </div>
                            </div>
                        <div class="row">
                                <table class="highlight">
                                    <thead>
                                        <tr>
                                            <th>GRNO</th>
                                            <th>Index no</th>
                                            <th>Name</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if(count($students) > 0)
                                                @foreach($students as $student)
                                                    <tbody>
                                                        <tr>
                                                            <td>{{$student->Gr_No}}</td>
                                                            <td>{{$student->Index_No}}</td>
                                                            <td>{{$student->Student_Name}}</td>
                                                            <td><a class="waves-effect waves-light btn" href="/scl/addStudentDetails/{{$student->Gr_No}}">button</a></  td>
                                                        </tr>
                                                    </tbody>
                                                @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>    
                    </span>
                </div>                            
            </div>
        </div>
    </div> 
</div>
@endsection
