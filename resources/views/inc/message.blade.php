@if(count($errors) > 0)
	@foreach($errors->all() as $error)
	    <div class="card red darken-1">  										
			<div class="card-content white-text">
        		 {{$error}}
			</div>
		</div>
    @endforeach

@endif