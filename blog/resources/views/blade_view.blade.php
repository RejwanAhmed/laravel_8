@include('blade_view_inner')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>This is blade.php tutorial</h1>
    <h2>{{ 10+10 }}</h2>
    
    {{-- @for($i=0;$i<count($name);$i++)
    {
        {{ $name[$i]; }}
    }
    @endfor --}}
    @php
        $count = 0;
        $supty_index = 0;
    @endphp
        @foreach ($name as $item)
            @php
                $count = $count + 1;
            @endphp 
            @if ($item=="Rahat")
                {{ $item  }} 's position is {{ $count }}
                <br>
                 
            @elseif($item=="supty")
                {{ $item }}'s position is {{ $count }}
                @php
                    $supty_index = $count;
                @endphp
                ar ki je korbo
                <br>
            @endif
    @endforeach
    
    <h1>Supty Index = {{ $supty_index }}</h1>
    
    
    @csrf
    
    <script>
        var data = @json($name);
        console.log(data);
    </script>
</body>
</html>