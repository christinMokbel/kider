<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show appointment</title>
</head>
<body>
    <h2>{{$appointment-> gurdianname}}</h2>
    <h3>{{$appointment-> gurdianemail}}</h3>
    <h3>{{$appointment-> childname}}</h3>
    <h3>{{$appointment-> childage}}</h3>
    <h3>{{$appointment->message}}</h3>
    <h3>{{$appointment-> created_at}}</h3>

</body>
</html>
