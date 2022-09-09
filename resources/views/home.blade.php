<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    @foreach ($trains as $train)
    <ul>
            <li>
                {{ $train->agency }}
            </li>
            <li>
                {{ $train->departure_station }} - {{ $train->departure_time }}
            </li>
            <li>
                {{ $train->arrival_station }} - {{ $train->arrival_time }}
            </li>        
        </ul>
    @endforeach

</body>
</html>