<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('/css/accounts.css')}}">
</head>
<body>

    @include('header')


    <section class="containerAllAccounts">

        @if (isset($names))
            
        
        <select class="form-select" aria-label="Default select example">

            <option selected>Select your account</option>

            @foreach ($names as $data)

            <option value="{{$data->user_name}}">{{$data->user_name}}</option>

            @endforeach
           
            
          </select>
          @endif
    </section>

    
</body>
</html>