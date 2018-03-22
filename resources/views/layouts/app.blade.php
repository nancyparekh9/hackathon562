<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="/css/app.css">
     
     
     <link rel="javascript" href="/js/app.js">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>{{  config('app.name','Hackathon562') }}</title>
</head>
    
<body>

    @include('inc.sidebar')
    
    @yield('content')
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
    <script>
        $(".button-collapse").sideNav();

            // Init Slider
        $('.slider').slider();

        $(document).ready(function(){
            // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
            $('#modal1').modal({
              dismissible: true, // Modal can be dismissed by clicking outside of the modal
              opacity: .5, // Opacity of modal background
              inDuration: 300, // Transition in duration
              outDuration: 200, // Transition out duration
              startingTop: '4%', // Starting top style attribute
              endingTop: '10%' // Ending top style attribute
            //   ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
            //   }
            //   complete: function() { alert('Closed'); } // Callback for Modal close
            }
          );
        });

         $(document).ready(function() {
            $('select').material_select();
        });
          </script>
</body>
</html> 