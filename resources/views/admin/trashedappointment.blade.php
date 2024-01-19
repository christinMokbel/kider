<!DOCTYPE html>
<html lang="en">
<head>
  <title>trashed appointment</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')

<div class="container">
  <h2>trashed appointment</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>gurdian name</th>
        <th>gurdian email</th>
        <th>child name</th>
        <th>child age</th>
        <th>message</th>
        <th>delete</th>
        <th>restore</th>
      </tr>
    </thead>
    <tbody>
        @foreach($appointments as $appointment)
      <tr>
        <td>{{$appointment-> gurdianname}}</td>
        <td>{{$appointment-> gurdianemail}}</td>
        <td>{{$appointment-> childname}}</td>
        <td>{{$appointment-> childage}}</td>
        <td>{{$appointment-> message}}</td>

        <td><a href="forceDeleteappointment/{{ $appointment->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

        <td><a href="restoreappointment/{{ $appointment->id }}" >restore</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
