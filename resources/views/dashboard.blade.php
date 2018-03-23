@extends('layouts.app')

@section('sidebar')
            @parent
@endsection
    

@section('content')
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <h1><b>Dashboard</b></h1>
                    </div>
                </div>
            </div>
            <div class="input-field col s12">
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