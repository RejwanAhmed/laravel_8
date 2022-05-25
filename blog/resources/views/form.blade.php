<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is first form of user login</h1>
    {{-- {{ $errors }} --}}
    {{-- @if ($errors)
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
    @endif --}}
    <form action="form_data" method = "POST">
        @csrf
        <input type="text" name = "username" value = "{{ old('username') }}" placeholder="Enter Username"> <span style = "color:red">@error('username'){{ '*'.$message }} @enderror</span>
        <br><br>
        
        <input type="password" name = "password" value="{{ old('password') }}" placeholder="Enter Password"><span style = "color:red">@error ('password') {{ '*'.$message }} @enderror</span>
        <br><br>
        
        <button type = "submit">Login</button>
    </form>
</body>
</html>