<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show teachers</title>
</head>
<body>
    <h2>{{$teacher-> name}}</h2>
    <h3>{{$teacher-> designation}}</h3>
    <h3>{{$teacher-> facebook}}</h3>
    <h3>{{$teacher-> twitter}}</h3>
    <h3>{{$teacher-> instagram}}</h3>
    <h3>{{($teacher->published)?"published":"not published"}}</h3>
    <img src="{{ asset('assets/img/'.$teacher->image) }}" alt="teacher" style="width:500px;">
    <h3>{{$teacher-> created_at}}</h3>

</body>
</html>
