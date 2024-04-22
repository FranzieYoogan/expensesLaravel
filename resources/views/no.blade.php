<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/no.css')}}">

</head>
<body>

    @include('header')
    
    <section class="containerAllNo">


    <form method="POST" action="/no" class="containerItemsNo">
        @csrf 

        <div class="mb-3">
          <label for="name" class="form-label">Your Name</label>
          <input type="text" name="name" class="inputNoStyle form-control" id="name" required>
          <div id="emailHelp" class="form-text">Name you wanna use on our app</div>
        </div>
     
        <div class="mb-3 form-check">
          <input onclick="eventInput()" type="checkbox" class="form-check-input" id="exampleCheck1" required>
          <label class="form-check-label" for="exampleCheck1">Sure that's your name</label>
        </div>
        <button type="submit" class="btnSignUp btn btn-primary">Sign Up</button>
      </form>

      <script>

        var click = 0.

        function eventInput() {
            click++;

            if(click == 1) {


       
            document.getElementById('exampleCheck1').style.backgroundColor = 'brown';
            document.getElementById('exampleCheck1').style.boxShadow = '0px 0px 2px 0px brown';
     

        } else {
            click = 0;
            document.getElementById('exampleCheck1').style.backgroundColor = 'white';
            document.getElementById('exampleCheck1').style.boxShadow = '0px 0px 2px 0px transparent';
        }

        }
                    
      </script>
    

    </section>
</body>
</html>