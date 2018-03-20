<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="/css/app.css">
     
     <link rel="javascript" href="/js/app.js">
     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
     <title>Hackathon2k18</title>
</head>
    
<body>

    @include('inc.sidebar')
    
    @yield('content')
    
    {{--  @if(count($errors) > 0)
        @foreach($errors->al() as $error)
            <div class="">
            <div>
        @endforeach
    @endif  --}}
    <!-- <script type="text/javascript" href="/js/app.js"></script> -->
</body>
</html> 