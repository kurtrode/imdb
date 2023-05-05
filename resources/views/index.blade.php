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
    <div id="results"><div>
    
    <script type="text/javascript" src="<?php echo asset('js/script.js')?>" />
</body>
</html>