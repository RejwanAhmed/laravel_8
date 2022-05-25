<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body
        {
            background-color: rgb(37, 24, 112);
            color: white;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            text-align:center;
        }
        .container
        {
            background-color: white;
            color: black;
            width: 500px;
            margin:auto;
            border: 2px solid red;
            transform: translate(0%,180%);
            box-shadow: 2px 2px 5px 5px black;
        }
        .container a
        {
            text-decoration: none;
            
        }
    </style>
<body>
    <div class="container">
        <h1>This is the Modified Welcome Page or this is the index page</h1>
        <a href="{{ url('/about') }}">Go to About Page</a>
    </div>
    
</body>
</html>