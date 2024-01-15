<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show testimonial</title>
</head>
<body>
    <h2>{{$testimonial-> name}}</h2>
    <h3>{{$testimonial-> description}}</h3>
    <h3>{{$testimonial-> profession}}</h3>
    <h3>{{($testimonial->published)?"published":"not published"}}</h3>
    <img src="{{ asset('assets/img/'.$testimonial->image) }}" alt="testimonial" style="width:500px;">
    <h3>{{$testimonial-> created_at}}</h3>

</body>
</html>
