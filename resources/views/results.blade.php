<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="results" method="get">
        @csrf
    <input type="text" id="search" name="search" value="{{old('search')}}">
    <button>Submit</button>
    </form>
    @foreach($results as $result)
    <h3>{{$result->name}}</h3>
    @endforeach
</body>
</html>