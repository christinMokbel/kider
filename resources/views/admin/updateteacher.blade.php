<!DOCTYPE html>
<html lang="en">
<head>
  <title>update teachers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    @include('admin.includes.nav')
<div class="container">
  <h2>update teachers</h2>
  <form action="{{ route('updateteacher', $teacher->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name" value="{{ $teacher->name }}">
    </div>
    <div class="form-group">
      <label for="designation">designation:</label>
      <input type="date" class="form-control" id="designation" placeholder="Enter designation" name="designation" value="{{ $teacher->designation }}">

    </div>

    <div class="form-group">
      <label for="image">Image:</label>
      <input type="file" class="form-control" id="image" name="image">
      <img src="{{ asset('assets/img/'.$teacher->image) }}" alt="teacher" style="width:200px;">
      @error('image')
        {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="facebook">facebook:</label>
      <input type="ipAddress" class="form-control" id="facebook" placeholder="Enter facebook" name="facebook" value="{{ $teacher->facebook }}">
    </div>
    @error('facebook')
    {{$message}}
    @enderror

    <div class="form-group">
      <label for="twitter">twitter:</label>
      <input type="text" class="form-control" id="ptwitter" placeholder="Enter twitter" name="twitter" value="{{ $teacher->twitter }}">
    </div>
    @error('twitter')
    {{$message}}
    @enderror
    <div class="form-group">
      <label for="instagram">instagram:</label>
      <input type="text" class="form-control" id="instagram" placeholder="Enter instagram" name="instagram" value="{{ $teacher->instagram }}">
    </div>
    @error('instagram')
    {{$message}}
    @enderror


    
    <div class="checkbox">
      <label><input type="checkbox" name="published"
@checked($teacher->published)> Published me</label>
    </div>
    <button type="submit" class="btn btn-default">update</button>
  </form>
</div>

</body>
</html>
