<!DOCTYPE html>
<html lang="en">
<head>
  <title>contacts</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')

<div class="container">
  <h2>all contacts</h2>
  <p>all contacts</p>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
        <th>show</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
      <tr>
        <td>{{$contact-> name}}</td>
        <td>{{$contact-> email}}</td>
        <td>{{$contact-> subject}}</td>
        <td>{{$contact-> message}}</td>

        <td><a href="showcontact/{{ $contact->id }}">show</a></td>
        <td><a href="deletecontact/{{ $contact->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
