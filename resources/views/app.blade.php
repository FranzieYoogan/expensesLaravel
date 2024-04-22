<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

</head>
<body>  

    @include('header')

    @if(session()->has('sessionName')) 

    <form action="/app" method="POST" class="moneyEdit">
        @csrf

    <h1 class="userStyle">{{session()->get('sessionName')}} - </h1>  @if(isset($salaryUser))  @else <h1 class="userStyle">0,00</h1> @endif <button type="submit" name="submitEdit" class="btnMoney"><img class="moneyIcon" src="{{asset('/img/icons/money.png')}}"  alt=""></button>

</form>
        <section class="containerAll">


            <div class="containerItems">

                <a href="/food" class="btnCategories btn btn-primary">FOOD</a>
                <a href="/food" class="btnCategories btn btn-primary">HOUSE</a>
                <a href="/food" class="btnCategories btn btn-primary">BILLS</a>
                <a href="/food" class="btnCategories btn btn-primary">REMEDIES</a>

            </div>
        

        </section>

    @endif
    
</body>
</html>