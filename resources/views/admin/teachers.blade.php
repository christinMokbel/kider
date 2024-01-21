<!DOCTYPE html>
<html lang="en">
<head>
  <title>teachers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')

<div class="container">
  <h2>all teachers</h2>
  <p>all teachers</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
        <th>designation</th>
        <th>facebook</th>
        <th>twitter</th>
        <th>instagram</th>
        <th>published</th>
        <th>Edit</th>
        <th>show</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($teachers as $teacher)
      <tr>
        <td>{{$teacher-> name}}</td>
        <td>{{$teacher-> designation}}</td>
        <td>{{$teacher-> facebook}}</td>
        <td>{{$teacher-> twitter}}</td>
        <td>{{$teacher-> instagram}}</td>
        <td>
            @if($teacher-> published)
            Yes
            @else
            No
            @endif
        </td>
        <td><a href="{{ route('editteacher',['id'=> $teacher->id]) }}">Edit</a></td>
        <td><a href="{{route('showteacher',['id'=> $teacher->id]) }}">show</a></td>
        <td><a href="{{ route('deleteteacher',['id'=> $teacher->id]) }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
