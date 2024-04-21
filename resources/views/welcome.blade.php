<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


        <link rel="stylesheet" href="{{asset('/css/login.css')}}">
      
    </head>
    <body class="antialiased">

        @include('header')

        <section class="containerAll">


            <div class="containerItems">
                <h1>Do you have an account ?</h1>

                <div style="display: flex; gap: 1em">
                    <a type="button" class="btnLoginStyle btn btn-secondary">SIM</a>
                    <a type="button" href="/no" class="btnLoginStyle btn btn-secondary">NÂO</a>
                </div>

               
             

            </div>
          
        </section>
   


    </body>
</html>