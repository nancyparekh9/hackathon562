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
        </script>
</body>
</html> 