@extends('layouts.app')

@section('sidebar')
            @parent
@endsection
    
<!--><-->
@section('content')
            <div class="container">
                <div class="row">
                    <div class="col s12">
<<<<<<< HEAD

                        <h1><b>dashboard</b></h1>

 
=======
>>>>>>> c14c020e75fe2c8684af172cd03e4e6ca0c52890
                    </div>
                    <select>
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">Option 1</option>
                      <option value="2">Option 2</option>
                      <option value="3">Option 3</option>
                    </select>
                    <label>Materialize Select</label>
                  </div>
@endsection
<script>
           window.onload = function() {
    if (window.jQuery) {  
        // jQuery is loaded  
        alert("Yeah!");
    } else {
        // jQuery is not loaded
        alert("Doesn't Work");
    }
}
</script>