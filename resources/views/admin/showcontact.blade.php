<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show contact</title>
</head>
<body>
    <h2>{{$contact-> name}}</h2>
    <h3>{{$contact-> email}}</h3>
    <h3>{{$contact-> subject}}</h3>
    <h3>{{$contact->message}}</h3>
    <h3>{{$contact-> created_at}}</h3>

</body>
</html>
