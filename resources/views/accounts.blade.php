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
            
        <form action="/app" method="POST">
            @csrf
           

        <select class="form-select" name="select" aria-label="Default select example">

            <option selected>Select your account</option>

            @foreach ($names as $data)

            <option value="{{$data->user_name}}">{{$data->user_name}}</option>

            @endforeach
           
  
          </select>
          <button type="submit" name="submitAccount" class="btnAccounts btn btn-primary">Sign In</button>

        </form>


          @endif
    </section>

    
</body>
</html>