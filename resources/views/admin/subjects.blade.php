<!DOCTYPE html>
<html lang="en">
<head>
  <title>subjects</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')

<div class="container">
  <h2>all subjects</h2>
  <p>all subjects</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>subject name</th>
        <th>age</th>
        <th>time</th>
        <th>capacity</th>
        <th>price</th>
        <th>published</th>
        <th>Edit</th>
        <th>show</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($subjects as $subject)
      <tr>
        <td>{{$subject-> subjectname}}</td>
        <td>{{$subject-> age}}</td>
        <td>{{$subject-> time}}</td>
        <td>{{$subject-> capacity}}</td>
        <td>{{$subject-> price}}</td>
        <td>
            @if($subject-> published)
            Yes
            @else
            No
            @endif
        </td>
        <td><a href="{{ route('editsubject',['id'=> $subject->id]) }}">Edit</a></td>
        <td><a href="{{route('showsubject',['id'=> $subject->id]) }}">show</a></td>
        <td><a href="{{ route('deletesubject',['id'=> $subject->id]) }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
