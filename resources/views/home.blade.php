<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/form" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text"  name="nom" value="{{old('nom')}}">
        <button type="submit">Envoyer</button>
    </form>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;">{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    @if(isset($message) && !empty($message))
    
     <h3 style="color: blue;">Your name is : {{ $message }}</h3>
    @else
    <p>Aucun nom </p>
    @endif

   


</body>
</html>