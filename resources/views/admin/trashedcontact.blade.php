<!DOCTYPE html>
<html lang="en">
<head>
  <title>trashed contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
@include('admin.includes.nav')

<div class="container">
  <h2>trashed contact</h2>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
        <th>delete</th>
        <th>restore</th>
      </tr>
    </thead>
    <tbody>
        @foreach($contacts as $contact)
      <tr>
        <td>{{$contact-> name}}</td>
        <td>{{$contact-> email}}</td>
        <td>{{$contact-> subject}}</td>
        <td>{{$contact-> message}}</td>

        <td><a href="forceDeletecontact/{{ $contact->id }}" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

        <td><a href="restorecontact/{{ $contact->id }}" >restore</a></td>

      </tr>
      @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
