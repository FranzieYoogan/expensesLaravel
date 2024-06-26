<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/header.css')}}">
</head>
<body>

    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">

            @if(session()->has('sessionName')) 
          <a class="navbar-brand" href="/app">
            <img src="{{asset('/img/icons/navicon.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Expenses Calculous
          </a>

          <a class="navbar-brand" href="/logout">
            <img class="logoutIcon"  src="{{asset('/img/icons/logout.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
           
          </a>

          @else
          
          <a class="navbar-brand" href="/">
            <img src="{{asset('/img/icons/navicon.png')}}" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Expenses Calculous
          </a>

          

          @endif
        </div>
      </nav>
    
</body>
</html>