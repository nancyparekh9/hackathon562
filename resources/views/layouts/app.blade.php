<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="/css/app.css">
     
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>{{  config('app.name','Hackathon562') }}</title>
</head>
    
<body>

    @include('inc.sidebar')
    
    @yield('content')
    <script src="/js/manifest.js"></script>
    <script src="/js/vendor.js"></script>
    <script src="/js/app.js"></script>
    <!--Import jQuery before materialize.js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script src="app.js"></script>
    <script>
	 $(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });

	$(document).ready(function() {
    $('select').material_select();
  });
       $(".button-collapse").sideNav();

        // Init Sidenav
        $('.button-collapse').sideNav();
    </script>
    <script>
         $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
    </script>
</body>
</html> 