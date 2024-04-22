<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{asset('/css/editsalary.css')}}">

</head>
<body>  

    @include('header')

    <h1 class="userStyle">{{session()->get('sessionName')}} - @if(isset($salaryUser))  @else 0,00   @endif <a href="/editsalary"> <img class="moneyIcon" src="{{asset('/img/icons/money.png')}}" alt=""></a> </h1>

    <section class="containerAll">

        <div class="containerItems input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Your Salary</span>
            <input type="number" class="inputStyle form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
            <button  class="btnEditSalary btn btn-primary">ENTER VALUE</button>
          </div>
    </section>
  
    
</body>
</html>