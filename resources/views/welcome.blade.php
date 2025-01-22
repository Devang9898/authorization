<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error )
            <li>{{$error}}</li>
                
            @endforeach
        </ul>
    </div>
    @endif





    
    <form action="{{url('login')}}" method="post">
    
          @csrf
          <label for="email" >email:</label>
          <input type="text" name="email" id="email">
          <br>
          <label for="password">Password:</label>
          <input type="password" name="password" id="password">
        
        

          <button type="submit">Log in</button>
        </form>
</body>
</html>