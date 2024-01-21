<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show subjects</title>
</head>
<body>
    <h2>{{$subject-> subjectname}}</h2>
    <h3>{{$subject-> age}}</h3>
    <h3>{{$subject-> time}}</h3>
    <h3>{{$subject-> capacity}}</h3>
    <h3>{{$subject-> price}}</h3>
    <h3> {{$subject->teacher->name}}</h3>
    <img src="{{ asset('assets/img/'.$subject->teacher->image) }}" alt="teacher image" style="width:500px;">

    <h3>{{($subject->published)?"published":"not published"}}</h3>
    <img src="{{ asset('assets/img/'.$subject->image) }}" alt="subject" style="width:500px;">
    <h3>{{$subject-> created_at}}</h3>

</body>
</html>
